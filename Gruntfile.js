/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

module.exports = function (grunt) {

  //Initializing the configuration object
  grunt.initConfig({
    less: {
      default: {
        options: {
          compress: false
        },
        files: {
          'public/assets/stylesheets/frontend.css': 'app/assets/stylesheets/frontend.less'
        }
      },
      production: {
        options: {
          compress: true
        },
        files: {
          'public/assets/stylesheets/frontend.css': 'app/assets/stylesheets/frontend.less'
        }
      }
    },
    concat: {
      options: {
        separator: ';'
      },
      js_frontend: {
        src: [
          'bower_components/jquery/dist/jquery.js',
          'bower_components/bootstrap/js/transition.js',
          'bower_components/bootstrap/js/collapse.js',
          'bower_components/bootstrap/js/dropdown.js',
          'bower_components/bootstrap/js/toggle.js',
          'bower_components/bootstrap/js/modal.js',
          'bower_components/bootstrap/js/button.js',
          'bower_components/bootstrap/js/tooltip.js',
          'app/assets/javascript/chosen.js',
          // 'app/assets/javascript/ajax-chosen.js',
          'app/assets/javascript/criteria-tooltips.js',
          'app/assets/javascript/frontend.js'
        ],
        dest: 'public/assets/javascript/frontend.js'
      },
      js_ie: {
        src: [
          'bower_components/html5shiv/dist/html5shiv.js',
          'bower_components/respond/dest/respond.src.js'
        ],
        dest: 'public/assets/javascript/ie.js'
      }
    },
    uglify: {
      options: {
        // Use if you want the names of your functions and variables
        // unchanged
        mangle: true
      },
      frontend: {
        files: {
          'public/assets/javascript/frontend.js': 'public/assets/javascript/frontend.js'
        }
      },
      ie: {
        files: {
          'public/assets/javascript/ie.js': 'public/assets/javascript/ie.js'
        }
      }
    },
    copy: {
      glyphicons: {
        files: [{
          expand: true,
          src: ['bower_components/bootstrap/fonts/**'],
          dest: 'public/assets/fonts',
          flatten: true,
          filter: 'isFile'
        }]
      },
      images: {
        files: [{
          expand: true,
          src: ['app/assets/images/**/*.png'],
          dest: 'public/assets/images',
          flatten: true,
          filter: 'isFile'
        }]
      }
    },
    watch: {
      views: {
        files: ['app/views/**/*.blade.php'],
        options: {
          livereload: 8080
        }
      },
      js_frontend: {
        files: [
          'bower_components/jquery/jquery.js',
          'bower_components/bootstrap/dist/js/bootstrap.js',
          'app/assets/javascript/**/*.js'
        ],
        tasks: ['concat:js_frontend', 'uglify:frontend'],
        options: {
          livereload: 8080
        }
      },
      less: {
        files: ['app/assets/stylesheets/*.less'],
        tasks: ['less'],
        options: {
          livereload: 8080
        }
      },
      tests: {
        files: ['app/controllers/*.php', 'app/models/*.php'],
        tasks: ['phpunit']
      }
    }
  });

  // Plugin loading
  grunt.loadNpmTasks('grunt-contrib-concat');
  grunt.loadNpmTasks('grunt-contrib-watch');
  grunt.loadNpmTasks('grunt-contrib-less');
  grunt.loadNpmTasks('grunt-contrib-uglify');
  grunt.loadNpmTasks('grunt-contrib-copy');

  // Task definition
  grunt.registerTask('default', [
    'copy:glyphicons',
    'copy:images',
    'concat:js_frontend',
    'concat:js_ie',
    'less:default',
    'watch'
  ]);

  grunt.registerTask('build', [
    'copy:glyphicons',
    'copy:images',
    'concat:js_frontend',
    'uglify:frontend',
    'concat:js_ie',
    'uglify:ie',
    'less:production'
  ]);
};
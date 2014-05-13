/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

// Fix an issue where jQuery show/hide doesn't work when applying the hidden
// class provided by bootstrap.
(function($) {
  var hide, show;
  show = $.fn.show;
  $.fn.show = function() {
    this.removeClass("hidden hide");
    return show.apply(this, arguments);
  };
  hide = $.fn.hide;
  return $.fn.hide = function() {
    this.addClass("hidden hide");
    return hide.apply(this, arguments);
  };
})(jQuery);


// Enable the jQuery Chosen plugin on select form elements that have the
// chosen-select class.
$(document).ready(function () {
  $('.chosen-select').chosen({disable_search_threshold: 10});
});

/**
 * Navigation active class styling handler
 *
 * Sets the active class to a navigation list item when the current URL matches
 * the link for the list item.
 */
var url = window.location;
// Will only work if string in href matches with location
$('ul.navbar-nav a[href=":contains(' + url + ')"]').parent().addClass('active');

// Will also work for relative and absolute hrefs
$("ul.navbar-nav a").filter(function () {
  return this.href == url;
}).parent().addClass('active');

/**
 * Clear modal when closed.
 */
$('body').on('hidden.bs.modal', '.modal', function () {
  $(this).removeData('bs.modal');
});

// When the user clicks on the top checkbox in the record table, select all the
// rows. Also fade in/out the "with selected" dropdown box.
$('.record-all').on('click', function() {
  $(this).closest('table').find('.record:checkbox').prop('checked',
                                                         this.checked);

  if ($(".record:checkbox").is(":checked")) {
    $(".record:checkbox").parent().parent().addClass("danger");
    $('#batch_actions').fadeIn();
  } else {
    $(".record:checkbox").parent().parent().removeClass("danger");
    $('#batch_actions').fadeOut();
  }
});

// When the user clicks on one of the row checkboxes, highlight the row.
$('.record').on('click', function() {
  if($(this).is(":checked")) {
    $(this).parent().parent().addClass("danger");
  } else {
    $(this).parent().parent().removeClass("danger");
  }

  // If all rows are checked, also tick the top checkbox (for all).
  // Otherwise untick it
  if ($(".record").length == $(".record:checked").length) {
    $('.record-all').prop('checked', true);
  } else {
    $('.record-all').prop('checked', false);
  }

  // When at least row checkbox is ticked show the "with selected" dropdown box.
  if ($(".record:checkbox").is(":checked")) {
    $('#batch_actions').fadeIn();
  } else {
    $('#batch_actions').fadeOut();
    $('.record-all').parent().parent().removeClass("danger");
  }
});

$("#batch_action").on('change', function() {
  $.ajax({
    url: $(this).closest('form').attr('action'),
    type: 'POST',
    data: $(this).closest('form').serialize()
  })
  .done(function(data) {
    $("#batch_action option").prop("selected", false);
    $('#batch_action').trigger("chosen:updated");

    $('.modal-content').html(data);
    $('#modal-window').modal();
  })
  .fail(function() {
    alert('There was a problem with processing your request.');
  });
});

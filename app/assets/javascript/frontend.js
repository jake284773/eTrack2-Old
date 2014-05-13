/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

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

$('.record:checkbox').change(function() {
    if ($(this).is(':checked')){
        $(this).parent().parent().addClass('warning');
    } else {
        $(this).parent().parent().removeClass('warning');
    }
})
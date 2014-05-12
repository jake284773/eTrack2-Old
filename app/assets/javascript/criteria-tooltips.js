/*
 * This file is part of the eTrack web application.
 *
 * (c) City College Plymouth
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

$(function () {
    $("td.criteria-achieved").tooltip({
        placement: 'bottom',
        title: 'Achieved',
        container: 'body'
    });

    $("td.criteria-awaitmark").tooltip({
        placement: 'bottom',
        title: 'Submitted, awaiting marking',
        container: 'body'
    });

    $("td.criteria-nya").tooltip({
        placement: 'bottom',
        title: 'Not yet achieved',
        container: 'body'
    });

    $("td.criteria-r1").tooltip({
        placement: 'bottom',
        title: 'Referral (first attempt)',
        container: 'body'
    });

    $("td.criteria-r2").tooltip({
        placement: 'bottom',
        title: 'Referral (second attempt)',
        container: 'body'
    });
});
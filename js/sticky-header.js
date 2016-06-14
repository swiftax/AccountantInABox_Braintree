/*
 *  jQuery Sticky Header v1.0.1
 *  Author: Danish Iqbal
 *  Website: http://plugins.imdanishiqbal.com/sticky-header
 *
 *  Licensed under MIT
 *
 */
(function($) {
    "use strict";
    $.fn.stickMe = function(options) {
        // Assigning variables
        var $window = $(window),
            $document = $(document),
            $elemTopOffset,
            $body = $('body'),
            position = 0,
            $elem = this,
            $elemHeight = $elem.innerHeight(),
            $win_center = $window.height() / 2,
            $pos,
            settings = $.extend({
                transitionDuration: 300,
                shadow: false,
                shadowOpacity: 0.3,
                animate: true,
                triggerAtCenter: true,
                topOffset: $elemHeight,
                transitionStyle: 'fade',
                stickyAlready: false
            }, options);

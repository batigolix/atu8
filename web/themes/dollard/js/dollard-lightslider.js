/**
 * @file
 * Slider block.
 */

(function ($, Drupal, drupalSettings) {
    'use strict';
    Drupal.behaviors.flickr = {
        attach: function (context, settings) {

            jQuery('#lightSlider').lightSlider({
                gallery: true,
                item: 1,
                loop:true,
                slideMargin: 0,
                thumbItem: 9,
                autoWidth: true,
            });


            //
            //var flickr_items = drupalSettings.mac_tools.flickr.flickr_items;
            //
            //// Calls Flickr, gets details of recent 20 images of flickr id.
            //jQuery.getJSON("http://api.flickr.com/services/feeds/photos_public.gne?id=23406248@N05&lang=en-en&format=json&jsoncallback=?", displayImages);
        }
    };
})(jQuery, Drupal, drupalSettings);


//<script type="text/javascript">
//    $(document).ready(function() {
//        $("#lightSlider").lightSlider({
//            item: 3,
//            autoWidth: false,
//            slideMove: 1, // slidemove will be 1 if loop is true
//            slideMargin: 10,
//
//            addClass: '',
//            mode: "slide",
//            useCSS: true,
//            cssEasing: 'ease', //'cubic-bezier(0.25, 0, 0.25, 1)',//
//            easing: 'linear', //'for jquery animation',////
//
//            speed: 400, //ms'
//            auto: false,
//            loop: false,
//            slideEndAnimation: true,
//            pause: 2000,
//
//            keyPress: false,
//            controls: true,
//            prevHtml: '',
//            nextHtml: '',
//
//            rtl:false,
//            adaptiveHeight:false,
//
//            vertical:false,
//            verticalHeight:500,
//            vThumbWidth:100,
//
//            thumbItem:10,
//            pager: true,
//            gallery: false,
//            galleryMargin: 5,
//            thumbMargin: 5,
//            currentPagerPosition: 'middle',
//
//            enableTouch:true,
//            enableDrag:true,
//            freeMove:true,
//            swipeThreshold: 40,
//
//            responsive : [],
//
//            onBeforeStart: function (el) {},
//            onSliderLoad: function (el) {},
//            onBeforeSlide: function (el) {},
//            onAfterSlide: function (el) {},
//            onBeforeNextSlide: function (el) {},
//            onBeforePrevSlide: function (el) {}
//        });
//    });
//</script>

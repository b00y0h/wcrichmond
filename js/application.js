/**
 *
 * Application File
 *
 **/
  (function($){
    $(document).ready(function(){


        // redraw certain items on browser resize so that the css font
        // size value of 'vw' work
        var causeRepaintsOn = $("#act-now h2");

        $(window).resize(function() {
            causeRepaintsOn.css("z-index", 1);
        });


    // prettyPhoto
    $(".vimeoVideos a[rel^='prettyPhoto']").prettyPhoto({
        theme: 'light_rounded',
        slideshow: false,
        social_tools: '',
        deeplinking: false
    });



    });
  })(jQuery);
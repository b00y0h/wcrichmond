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

    // archive listing
    $('.blog-list-archive li ul').hide();
    $('.blog-list-archive li a').click(function(){
        $(this).parent().addClass('selected');
        $(this).parent().children('ul').slideDown(250);
        $(this).parent().siblings().children('ul').slideUp(250);
        $(this).parent().siblings().removeClass('selected');
        return false;
    });



    });
  })(jQuery);
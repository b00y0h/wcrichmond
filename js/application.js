/**
 *
 * Application File
 *
 **/
  (function($){
    $(document).ready(function(){



        $('.thumbnail-wrap .button').on('click', function() {

        var vid_string = $(this).attr('href');
        var vid_html = "";
        if(vid_string.indexOf('youtube') !== -1) {

            vid_string = vid_string.replace('www.', '').replace('http://youtube.com/watch?v=', '');
            vid_html = '<iframe class="vid-frame" width="294" height="164" src="http://www.youtube.com/embed/' + vid_string + '?rel=0&amp;autoplay=1&amp;wmode=transparent" frameborder="0"></iframe>';

        } else if(vid_string.indexOf('youtu.be') !== -1) {

            vid_string = vid_string.replace('www.', '').replace('http://youtu.be/', '');
            vid_html = '<iframe class="vid-frame" width="294" height="164" src="http://www.youtube.com/embed/' + vid_string + '?rel=0&amp;autoplay=1&amp;wmode=transparent" frameborder="0"></iframe>';

        } else if(vid_string.indexOf('vimeo') !== -1) {

            vid_string = vid_string.replace('www.', '').replace('http://vimeo.com/', '').replace('https://vimeo.com/', '');
            vid_html = '<iframe class="vid-frame" src="http://player.vimeo.com/video/' + vid_string + '?portrait=0&amp;autoplay=1" width="294" height="164" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        }

        $(this).fadeOut(300);
        $(this).parent().css('background', '#E6E6E6').find('img').fadeOut(300);
        $(this).parent().append(vid_html);

        return false;
    });



        // redraw certain items on browser resize so that the css font
        // size value of 'vw' work
        var causeRepaintsOn = $("#act-now h2");

        $(window).resize(function() {
            causeRepaintsOn.css("z-index", 1);
        });


    // prettyPhoto
    // $(".vimeoVideos a[rel^='prettyPhoto']").prettyPhoto({
    //     theme: 'light_rounded',
    //     slideshow: false,
    //     social_tools: '',
    //     deeplinking: false
    // });

    // archive listing
    $('.blog-list-archive li ul').hide();
    $('.blog-list-archive > li > a').click(function(){
        $(this).parent().addClass('selected');
        $(this).parent().children('ul').slideDown(250);
        $(this).parent().siblings().children('ul').slideUp(250);
        $(this).parent().siblings().removeClass('selected');
        return false;
    });
    });
  })(jQuery);
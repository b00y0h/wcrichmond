<?php $is_featured = get_post_meta($post->ID, '_video_featured', true);
        if ($is_featured) { $is_featured = $is_featured[0]; } else { $is_featured = 0; }
        // echo $is_featured; ?>

<!--BEGIN .entry-content -->
<div class="entry-content">
    <div class="thumbnail-wrap">
    <?php
    if ( has_post_thumbnail() ) { ?>
    <a href="<?php echo get_post_meta($post->ID, '_video_link', true); ?>" class="thumbnail button">

    <?php the_post_thumbnail();} ?>
    </a>



    </div>
    <div class="entry-content-snippet">
    <h2 class="entry-title"><?php the_title(); ?></h2>
    <?php the_content(); ?>
    </div>

<!--END .entry-content -->
</div>

<script>

  jQuery(document).ready(function($){

        $('.thumbnail-wrap .button').on('click', function() {

        var vid_string = $(this).attr('href');
        if(vid_string.indexOf('youtube') != -1) {

            vid_string = vid_string.replace('www.', '').replace('http://youtube.com/watch?v=', '');
            var vid_html = '<iframe class="vid-frame" width="294" height="164" src="http://www.youtube.com/embed/' + vid_string + '?rel=0&amp;autoplay=1&amp;wmode=transparent" frameborder="0"></iframe>';

        } else if(vid_string.indexOf('youtu.be') != -1) {

            vid_string = vid_string.replace('www.', '').replace('http://youtu.be/', '');
            var vid_html = '<iframe class="vid-frame" width="294" height="164" src="http://www.youtube.com/embed/' + vid_string + '?rel=0&amp;autoplay=1&amp;wmode=transparent" frameborder="0"></iframe>';

        } else if(vid_string.indexOf('vimeo') != -1) {

            vid_string = vid_string.replace('www.', '').replace('http://vimeo.com/', '').replace('https://vimeo.com/', '');
            var vid_html = '<iframe class="vid-frame" src="http://player.vimeo.com/video/' + vid_string + '?portrait=0&amp;autoplay=1" width="294" height="164" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>';
        }

        $(this).fadeOut(300);
        $(this).parent().css('background', 'black').find('img').fadeOut(300);
        $(this).parent().append(vid_html);

        return false;
    });
})


</script>
<!--BEGIN .entry-meta .entry-header-->
<div class="entry-meta entry-header">
    <span class="published"><?php the_time( get_option('date_format') ); ?></span>
    <span class="meta-sep"> / </span>
    <span class="comment-count"><?php comments_popup_link(__('No Comments', 'wcrichmond'), __('1 Comment', 'wcrichmond'), __('% Comments', 'wcrichmond')); ?></span>
    <?php if( !is_single() ) { ?>
        <span class="meta-sep"> / </span>
        <span class="entry-categories"><?php _e('Posted in: ', 'wcrichmond') ?> <?php the_category(', ') ?></span>
    <?php } ?>
    <?php edit_post_link( __('Edit', 'wcrichmond'), ' / <span class="edit-post">', '</span>' ); ?>
<!--END .entry-meta entry-header -->
</div>
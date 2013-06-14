<!--BEGIN #sidebar .aside-->
<div id="sidebar" class="aside calendar-sidebar">
    <h5 class="date"><?php echo date('l');?><br>
    <?php echo date('F j, Y'); ?></h5>
    <div class="red-gradient-bg view-calendar">
          <a href="/news/master-calendar">View Master Calendar</a>
    </div>
<?php  dynamic_sidebar( 'Page Sidebar' ); ?>
<!--END #sidebar .aside-->
</div>
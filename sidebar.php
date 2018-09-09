<!-- sidebar -->
<aside class="sidebar" role="complementary">

	<div class="sidebar-widget RightMenu">
        <div class = "menu">
      
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-1')) ?>
                <?php get_template_part('searchform'); ?>
                <?php if(!function_exists('dynamic_sidebar') || !dynamic_sidebar('widget-area-2')) ?>
        </div>   
    </div>
</aside>
<!-- /sidebar -->

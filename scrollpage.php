<?php get_header(); ?>
<?php get_sidebar(); ?>
<!--
/**
 * Template Name: Scrollpage
 * This template is to display menu items in a scroller for the Ridercam website
 * @package WordPress
 * @subpackage HTML5Blank
 * @since HTML5Blank
 */
-->
	<main role="main">
<!-- section -->
		<section>
       
            <article>
               <?php 
                $pages = get_pages(); 
                foreach ($pages as $page_data) {
                $content = apply_filters(‘the_content’, $page_data->post_content); 
                $title = $page_data->post_title; 
                echo '<div id = "content">'.$content.'</div>'; 
}
?>
			</article>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
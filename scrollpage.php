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
                $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
                $pages = get_pages(); 
                
                $page_id = get_the_ID();
//                $pages = get_pages('child_of='. $page_id);
//                
                foreach ($pages as $page_data) {
                $content = apply_filters(‘the_content’, $page_data->post_content); 
                $title = $page_data->post_title; 
                $images = get_the_post_thumbnail_url($page_data->ID, 'full');  
                    
               echo  '<div id = "content" style="background: url('.$images.') no-repeat;">
                      <div id = "content-area">'.$content.'</div>';
                  
}
?>
			</article>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
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
       <!-- Fetch the pages and display in one continuous scroller -->
<!--            <article>-->
               <?php 
                
                $page_id = get_the_ID(18); 
                $args = array( 
                        'child_of' => $post->$page_id, 
                        'parent ' => $post->$page_id,
                        'hierarchical' => 0,
                        'sort_column' => 'menu_order', 
                        'sort_order' => 'desc'
                    );
                
                $pages = get_pages($args);
                
                $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
//                $pages = get_pages('child_of='.); 
                //$pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
//               
//                $pages = get_pages('child_of=',18);
//                
                foreach ($pages as $page_data) {
//                $content = apply_filters(‘the_content’, $page_data->post_content); 
                $content = apply_filters(‘the_content’, $page_data->post_content); 
                    
                $title = $page_data->post_title; 
                $images = get_the_post_thumbnail_url($page_data->ID, 'full');  
                    
               echo  
                      '<div id = "content" style="background: url('.$images.') no-repeat;">
                       <div id = "content-area">'.$content.'</div></div>';
                  
}
?>
<!--			</article>-->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
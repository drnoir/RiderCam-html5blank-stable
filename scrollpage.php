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
                
//                $page_id = get_the_ID(18); 
//                $args = array( 
//                        'post_type' => 'page',
//                        'post_parent'    => $post->$page_id,
//                        'child_of' => $post->$page_id, 
//                        'parent ' => $post->$page_id,
//                        'hierarchical' => 0,
//                        'sort_column' => 'menu_order', 
//                        'sort_order' => 'asc'
//                    );
//                
//                $my_wp_query = new WP_Query();
//                $all_wp_pages = $my_wp_query->query(array('post_type' => 'page', 'posts_per_page' => '-1'));
//                
//                $about =  get_page_by_title('about');
//                $about_children = get_page_children( $about->ID, $all_wp_pages );
////                $pages = get_pages($args);
//                
//                $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
////                $pages = get_pages('child_of='.); 
//                //$pages = get_pages( array( 'child_of' => $post->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );
////               
////                $pages = get_pages('child_of=',18);
////                
//                foreach ($about_children as $page_data) {
////                $content = apply_filters(‘the_content’, $page_data->post_content); 
//                $content = apply_filters(‘the_content’, $page_data->post_content); 
//                $title = $page_data->post_title; 
//                $images = get_the_post_thumbnail_url($page_data->ID, 'full');  
//                    
//               echo   '<pre>' . print_r( $portfolio_children, true ) . '</pre>';
//                      '<div id = "content" style="background: url('.$images.') no-repeat;">
//                       <div id = "content-area">'.$title.$content.'</div></div>';
//                  
            
                
        $childArgs = array(
            'sort_order' => 'ASC',
            'sort_column' => 'menu_order',
            'child_of' => get_the_ID()
        );
            
        $childList = get_pages($childArgs);
        $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );
            
        $images = get_the_post_thumbnail_url($childList->ID, 'full');  
            
        foreach ($childList as $child) { ?>
            <div class="child-page">
                <h2 class="child-title"><?php echo $child->post_title; ?></h2>
                <?php echo apply_filters( 'the_content', $child->post_content); ?>
            </div>
        <?php }
        ?>
            
}
}
?>
<!--			</article>-->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
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
                
    $childArgs = array( 
    'sort_order' => 'ASC', 
    'sort_column' => 'menu_order', 
    'child_of' => get_the_ID() 
    ); 
             
    $childList = get_pages($childArgs); 
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'medium' ); 
    $images = get_the_post_thumbnail_url($childList->ID, 'medium');  
            
    foreach ($childList as $child) {  
        $images = get_the_post_thumbnail_url($child->ID, ('700,300')); 
        $content = apply_filters('the_content', $child->post_content);
        $title = apply_filters('the_content', $child->post_title); 
        
        $custom_logo_id = get_theme_mod( 'custom_logo' );
        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
        
        echo  
            '<div class="content" style="background: url('.$images.') no-repeat;"> 
            <div class = "content-area">
            <img src="'. esc_url( $logo[0] ) .'">
            <h2>'.$title.'</h2>'.$content.'</div>
            <div class = "scroller"><i class="scroll fas fa-angle-double-down fa-3x"></i></div></div>';
        } 
          
?>
<!--			</article>-->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
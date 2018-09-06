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
    $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' ); 
    $images = get_the_post_thumbnail_url($childList->ID, 'full');  
            
    foreach ($childList as $child) {  
        $images = get_the_post_thumbnail_url($child->ID, ('700,300')); 
        $content = apply_filters('the_content', $child->post_content);
        
        echo  
            '<div class="content" style="background: url('.$images.') no-repeat;"> 
            <div class = "content-area">'.$content.'</div><button class="scroll">Scroll Down</button></div>';
        } 
          
?>
<!--			</article>-->
            <img src ="img/scoll.png" class = "scroll" >
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
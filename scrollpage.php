<!-- remove auto p tags-->
<?php remove_filter (’the_content’, ‘wpautop’); ?>

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
        $images = get_the_post_thumbnail_url($child->ID, array(500, 500)); 
        $content = apply_filters('the_content', $child->post_content);
        $title = apply_filters('the_content', $child->post_title); 
        $title_link = (string)$title; 
        $title_link_s = strip_tags($title_link, '<p>');
        
        echo  
            '<div class="content" style="background: url('.$images.') no-repeat;"> 
            <div class = "content-area">
            <div class="logo">'.the_custom_logo().'</a></div>  
            <a href="#'.$title_link_s.'"></a>
            <h2>'.$title.'</h2>'.$content.'</div>
            <div class = "scroller"><img class="scroll" src = "/camrider/wp-content/uploads/2018/09/scollblack.png"></img></div></div>';
        } 
          
?>
<!--			</article>-->
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
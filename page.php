<?php get_header(); ?>
<div id = "container-fluid">
<?php get_sidebar(); ?>	
    <main role="main">
            
        <!-- section -->
		<section>
        <!-- Apply content CSS Styles -->
        <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <div id = "content" style="background: url('<?php echo $backgroundImg[0]; ?>') no-repeat;"> 
			<h1><?php the_title(); ?></h1>

		<?php if (have_posts()): while (have_posts()) : the_post(); ?>

			<!-- article -->
            <div id = "content-area">
                  <!-- logo -->
					<div class="logo">
						<a href="<?php echo home_url(); ?>">
                            <?php if ( function_exists( 'the_custom_logo' ) ) {
                        the_custom_logo();
                            } ?>
							<!-- svg logo - toddmotto.com/mastering-svg-use-for-a-retina-web-fallbacks-with-png-script -->
                             <!-- code in logo upload here -->
						</a>
					</div>
					<!-- /logo -->
            <!-- content area to avoid overlapping content to menu -->    
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

				<?php the_content(); ?>

				<?php comments_template( '', true ); // Remove if you don't want comments ?>

				<br class="clear">

				<?php edit_post_link(); ?>

			</article>
			<!-- /article -->
            </div>
            <!--content area end -->

		<?php endwhile; ?>

		<?php else: ?>

			<!-- article -->
			<article>

				<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>

			</article>
			<!-- /article -->

		<?php endif; ?>
        <!-- close div for content -->
        </div>
		</section>
		<!-- /section -->
	</main>

<?php get_footer(); ?>
</div>
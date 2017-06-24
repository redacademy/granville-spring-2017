<?php
/**
 * Template Name: About
 *
 *
 * @package SGSC_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">
      <?php if ( has_post_thumbnail() ) {
        $header_image = get_the_post_thumbnail_url();
        } ?>
        <!--the_content();?>-->

		<div class="about-header" style="background-image: url(<?php echo $header_image ?>); background-size: cover; height: 353px; background-position: center;">

		</div>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'about' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

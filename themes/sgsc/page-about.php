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
        the_post_thumbnail();
        } 
        the_content();?>
			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

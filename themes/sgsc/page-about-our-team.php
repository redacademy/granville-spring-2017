<?php
/**
 * Template Name: About-our-team
 *
 *
 * @package SGSC_Theme
 */

get_header(); ?>

	<section class="header">
		<div class="entry-header">
			<!--<div class="about-hero-wrapper"> -->
			<?php if ( has_post_thumbnail() ) {
        		the_post_thumbnail();
        	} ?> 
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<!--</div>-->
			<div class="donate-btn">
				<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
				<i class="fa fa-heart-o" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section><!-- .entry-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

        <!--the_content();?>-->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'about' ); ?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

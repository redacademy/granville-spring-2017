<?php
/**
* Template Name: Archive Volunteer Template
 *
 * @package SGSC_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			

				
					<header class="entry-header">
								<h1 class="entry-header">Join Us</h1>
								<div class="donate-btn">
								<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
								<i class="fa fa-heart-o" aria-hidden="true">
									<p>Donate</p>
								</i>
								</a>
							</div>
					</header><!-- .entry-header -->

			<?php /* Start the Loop */ ?>
			<div class="join-us-section">
			<?php while ( have_posts() ) : the_post(); ?>
				
				<?php if ( has_post_thumbnail() ) : ?>

				<?php endif; ?>
				<?php the_title( sprintf( '<a class="volunteer rectangle" href="%s" rel="bookmark"><h2>', esc_url( get_permalink() ) ), '</h2></a>' ); ?>
				<?php if ( 'post' === get_post_type() ) : ?>
			
				<?php endif; ?>

			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part(); ?>

		<?php endif; ?>
</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

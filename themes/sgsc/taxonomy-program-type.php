<?php
/**
 * The template for displaying program pages.
 *
 * @package SGSC_Theme
 */

 get_header(); ?>
 	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">
		
		<?php if ( have_posts() ) : ?>

			<section class="header">
				<div class="program-hero">
					<div class="donate-btn">
						<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
						<i class="fa fa-heart-o" aria-hidden="true"></i>
						</a>
					</div>
				</div>
				<div class="entry-header">
					<?php the_archive_title ( '<h1 class="page-title">', '</h1>' ); ?>
				</div>
			</section>
		
			<ul class="program-grid">
				<?php while ( have_posts() ) : the_post(); ?>
					<li>
						<div class="program-img">
							<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'medium' ); ?>
							<?php endif; ?>
						</div>
						<div class="program-info">
							<?php the_title( '<h5>', '</h5>' ); ?>
							<?php echo CFS()->get( 'information' ); ?>
							<?php the_content( '<p>', '</p>' ); ?>
						</div>
					</li>
					<?php endwhile; ?>
				</ul>	

		<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		
		<section class="calendar-program">
			<h2>Calendar of Programs</h2>
			<p>	Join us! We have a multitude of programs to keep you healthy, active and connected. We offer hot lunches, as well as exercise, self-care, educational, and social programs that are affordable and open to participants of all abilities and skill levels.</p>
			<p>Check out the program descriptions, call us at 604-732-0812 for more information, or drop-in to try out a class! Have an idea for a program? Email Alex at akorotchenko@southgranvilleseniors.ca.</p>
			<p>Download the Newsletter Here</p>
		</section>

		</main><!-- #main -->
	</div><!-- #primary -->

 <?php get_footer(); ?>


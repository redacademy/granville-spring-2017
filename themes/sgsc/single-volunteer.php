<?php
/**
 * The template for displaying all single posts.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>



	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<header class="entry-header">
								<h1 class="entry-header">Volunteer Opportunities</h1>
								<div class="donate-btn">
								<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
								<i class="fa fa-heart-o" aria-hidden="true">
									<p>Donate</p>
								</i>
								</a>
							</div>
					</header><!-- .entry-header -->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'volunteer' ); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

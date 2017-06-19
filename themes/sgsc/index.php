<?php
/**
 * The main template file.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header class="site-header">
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
					<h1>Blog Post</h1>
					<div class="donate-btn">
  				 	<a href="<?php echo esc_url( get_permalink(get_page_by_title( 'donate' )) ) ?>">
  				 		<i class="fa fa-heart-o" aria-hidden="true">
  				 			<p>Donate</p>
  				 		</i>
  				 		</a>
  				 </div>
				</header>
			<?php endif; ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<div class="image-position">
						<?php if ( has_post_thumbnail() ) : ?>
							<?php the_post_thumbnail( 'large' ); ?>
						<?php endif; ?>
					</div>
					<div class="entry-title">
						<a href="%s" rel="bookmark">
							<?php the_title( sprintf( '<h2>', esc_url( get_permalink() ) ), '</h2>' ); ?>

							<?php if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php red_starter_posted_on(); ?>
							</div><!-- .entry-meta -->
						</a>
					</div>
					<?php endif; ?>
				</header><!-- .entry-header -->
			</article><!-- #post-## -->


			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

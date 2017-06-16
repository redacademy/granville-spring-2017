<?php
/**
 * The template for displaying archive pages.
 *
 * @package SGSC_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			
			<section class="featured-gallery-section">
				
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">Our Featured Gallery</h1>
							<div class="donate-btn">
								<a href="<?php echo esc_url( get_permalink(get_page_by_title( 'donate' )) ) ?>">
									<i class="fa fa-heart-o" aria-hidden="true">
										<p>Donate</p>
									</i>
									</a>
						</div>
					</header><!-- .page-header -->

					<div class="gallery-album">
					<?php while ( have_posts() ) : the_post(); ?>

							<?php $product_types = get_terms(
              	array( 
									'taxonomy' => 'featured-gallery',
									'hide_empty' => 0,
              	)); 
							if ( !empty($product_types) && !is_wp_error($product_types)) : ?>
								<?php foreach ( $product_types as $product_type ) : ?>
									<a href="<?php echo get_term_link($product_type); ?>">
										<p>
											<?php echo $product_type->name;?>
										</p>							
									</a>
									<?php the_post_thumbnail(); ?>

									<?php endforeach; ?>
								<?php endif; ?>


					<?php endwhile; ?>
					</div>
					<?php the_posts_navigation(); ?>
				<?php else : ?>
					<?php get_template_part( 'template-parts/content', 'none' ); ?>
				<?php endif; ?>
			</section>

			<section class="lastest-gallery-section">
				<?php if ( have_posts() ) : ?>

					<header class="page-header">
						<h1 class="page-title">Latest Gallery Albums</h1>
							<div class="donate-btn">
								<a href="<?php echo esc_url( get_permalink(get_page_by_title( 'donate' )) ) ?>">
									<i class="fa fa-heart-o" aria-hidden="true">
										<p>Donate</p>
									</i>
									</a>
						</div>
					</header><!-- .page-header -->

					<div class="gallery-album">
					<?php while ( have_posts() ) : the_post(); ?>
					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<div class="image-position">		 
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'full' ); ?>
								<?php endif; ?>
							</div>

							<a class="entry-title" href="<?php echo esc_url( get_permalink() ) ?>">
								<?php the_title( sprintf( '<h2 >', esc_url( get_permalink() ) ), '</h2>' ); ?>
							</a>

								<?php if ( 'post' === get_post_type() ) : ?>
								<div class="entry-meta">
									<?php red_starter_posted_on(); ?> / <?php comments_number( '0 Comments', '1 Comment', '% Comments' ); ?> / <?php red_starter_posted_by(); ?>
								</div><!-- .entry-meta -->
							<?php endif; ?>
						</header><!-- .entry-header -->

					</article><!-- #post-## -->

					<?php endwhile; ?>
					</div>

					<?php the_posts_navigation(); ?>

				<?php else : ?>

					<?php get_template_part( 'template-parts/content', 'none' ); ?>

				<?php endif; ?>

			</section>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

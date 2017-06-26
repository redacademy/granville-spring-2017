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
						<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
							<i class="fa fa-heart-o" aria-hidden="true">
								<p>Donate</p>
							</i>
							</a>
					</div>
				</header>
			<?php endif; ?>

			<div class="gallery-album">
				<?php $args = array(
					'posts_per_page' 	=> -1,
					'post_type' 			=> 'gallery',
          'orderby'						=> 'modified'
				);
				$posts_array = get_posts( $args );
				$i = 0;
				foreach ( $posts_array as $post ) : setup_postdata( $post );
				$displays = CFS()->get( 'featured_gallery' );
				if ( $i < 3) {
					if($displays == 1){ ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<div class="image-position">
								<?php if ( has_post_thumbnail() ) : ?>
									<?php the_post_thumbnail( 'large' ); ?>
								<?php else :?>
									<p>Please Upload a Feature-Image</p>
								<?php endif; ?>
							</div>
								<a class="entry-title" href="<?php echo esc_url( get_permalink() ) ?>">
									<h2><?php the_title(); ?></h2>
								</a>
						</header>
					</article><!-- #post-## -->

				<?php		
						$i ++;
					}
				}?>

				<?php endforeach; ?>
				<?php wp_reset_postdata(); ?>
			</div>

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
                <?php the_post_thumbnail('full'); ?>

						</div>

						<a class="entry-title" href="<?php echo esc_url( get_permalink() ) ?>">
							<?php the_title( sprintf( '<h2 >', esc_url( get_permalink() ) ), '</h2>' ); ?>
							<p><?php red_starter_posted_on(); ?></p>
						</a>
					</header><!-- .entry-header -->

				</article><!-- #post-## -->

				<?php endwhile; ?>
				</div>

				<?php the_posts_navigation(
					array (
					'next_text'=> __( 'next chapter:' ),
					'prev_text'=> __( 'prev chapter:' )
					)
				); ?>

			<?php else : ?>

				<?php get_template_part( 'template-parts/content', 'none' ); ?>

			<?php endif; ?>

		</section>
	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>
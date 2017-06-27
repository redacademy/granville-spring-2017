<?php
/**
 * Template Name: Program
 * 
 * @package SGSC_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area container">
		<main id="main" class="site-main" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<section class="header">
					<div class="program-hero">
					</div>
					<div class="entry-header">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
						<div class="donate-btn">
							<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
							<i class="fa fa-heart-o" aria-hidden="true"></i>
							</a>
						</div>
					</div>
				</section><!-- .entry-header -->

				<div class="programs">
					
					<?php $program_list = get_terms(array (
							'taxonomy' => 'program-type',
							'hide_empty' => false
					)); 
					$program_list = change_program_type($program_list);
					
					if (!empty($program_list)&& !is_wp_error($program_list)) : ?>

						<ul class="program-list">
							<?php foreach ($program_list as $program_type) : ?>
								<a href = "<?php echo get_term_link($program_type); ?>" class="program-link">
									<li>
										<?php echo $program_type->name; ?>
									</li>
								</a>
							<?php endforeach; ?>
						</ul>
					<?php endif; ?>
				</div>

				<?php while ( have_posts() ) : the_post(); ?>
					<div class="entry-content">
						<?php the_content(); ?>
						<?php
							wp_link_pages( array(
								'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
								'after'  => '</div>',
							) );
						?>
					</div><!-- .entry-content -->
				<?php endwhile; // End of the loop. ?>
			</article>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

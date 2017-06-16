<?php
/**
 * The template for displaying all pages.
 *
 * @package RED_Starter_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail(); } ?>
				
				<header class="entry-header">
					<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</header><!-- .entry-header -->
				
				<div>
					<?php $program_types = get_terms(array (
							'taxonomy' => 'program-type',
							'hide_empty' => false
						)); 
						if (!empty($program_types)&& !is_wp_error($program_types)) : ?>
						
						<?php foreach ($program_types as $program_type) : ?>
							<ul>
								<li>
									<a href = "<?php echo get_term_link($program_type); ?>">
									<?php echo $program_type->name; ?></a>
								</li>
							</ul>
						<?php endforeach; ?>
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

<?php
/**
 * Template Name: Program
 * 
 * @package RED_Starter_Theme
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
					<?php $program_types = get_terms(array (
							'taxonomy' => 'program-type',
							'hide_empty' => false
						)); 

					foreach($program_types as $key => $val) {
						if($val->slug == 'information') {
								$item = $program_types[$key];
								unset($program_types[$key]);
								array_push($program_types, $item); 
								break;
						}
					}

						if (!empty($program_types)&& !is_wp_error($program_types)) : ?>

						<ul class="program-list">						
							<?php foreach ($program_types as $program_type) : ?>
								<li>
									<a href = "<?php echo get_term_link($program_type); ?>">
									<?php echo $program_type->name; ?></a>
								</li>
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
			<div id="load-event-calendar">
			</div>
			
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

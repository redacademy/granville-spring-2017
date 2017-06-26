<?php
/**
 * Template Name: blue pinapple
 *
 * @package SGSC_Theme
 */

 $args= array(
     'post_type'=> 'our_team',
     'posts_per_page'=> -1
 );

 $leaders = get_posts($args);

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

            <div>
                	<ul>
						<?php foreach ( $team_member as $post ) : setup_postdata( $post ); ?>
							<li class="our_team">
								<div class="image-wrapper">
									<?php if ( has_post_thumbnail() ) : ?>
										<?php the_post_thumbnail('large'); ?>
									<?php endif; ?>
								</div>
								<div class="text-wrapper">
									<p class="leader-name"><?php echo esc_html( CFS()->get( 'name' ) ); ?></p>
									<p><?php echo esc_html( CFS()->get( 'title' ) ); ?></p>
									<p class="hidden-mobile"><?php echo wp_kses( CFS()->get( 'bio' ),array('br') ); ?></p>
								</div>
							</li>
						<?php endforeach; wp_reset_postdata(); ?>
					</ul>
            </div>

			<?php endwhile; // End of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

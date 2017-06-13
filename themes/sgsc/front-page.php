<?php
/**
 * The main template file.
 *
 * @package SCSG_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<?php if ( have_posts() ) : ?>

			<?php if ( is_home() && ! is_front_page() ) : ?>
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>
			<?php endif; ?>

			<section class="learn-about-story">
        <h1>Learn sbout our story</h1>
      </section>

      <section class="programs-event-blog">
        <div class="front-program">
          <h1>Discover our programs</h1>
        </div>

        <div class="front-events">
          <h1>Upcomming events</h1>
        </div>

        <div class="front-blog">
          <h1>Lastest blog posts</h1>
        </div>
      </section>

      <section class="feature-gallery">
        <h1>"Grandma", Mae Irving's 105th birthday</h1>
      </section>

      <section class="involved-join">
        <div class="front-involved">
          <h1>Get involved</h1>
        </div>

        <div class="front-join">
          <h1>Join Us or Volunteer</h1>
        </div>
      </section>
			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'template-parts/content', 'none' ); ?>

		<?php endif; ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

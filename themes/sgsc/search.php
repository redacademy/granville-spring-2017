<?php
/**
* The template for displaying search results pages.
*
* @package SGSC_Theme
*/

get_header(); ?>

<section id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php if ( have_posts() ) : ?>

		<header class="page-header">
			<h1 class="page-title"><?php printf( esc_html( 'Search Results for: %s' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
			<div class="donate-btn">
				<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
					<i class="fa fa-heart-o" aria-hidden="true">
						<p>Donate</p>
					</i>
				</a>
			</div>
		</header><!-- .page-header -->

		<?php /* Start the Loop */ ?>
		<?php while ( have_posts() ) : the_post(); ?>

		<section id="search-results">
			<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="entry-header">
					<?php the_title( sprintf( '<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' ); ?>
				</header><!-- .entry-header -->

				<div class="entry-summary">
					<?php the_excerpt(); ?>

				</div><!-- .entry-summary -->

				<a class="m-button" href="<?php echo esc_url( get_permalink() ) ?>"><p>More</p></a>

			</article><!-- #post-## -->
		</section>


		<?php endwhile; ?>

		<?php red_starter_numbered_pagination(); ?>

	<?php else : ?>

		<?php get_template_part( 'template-parts/content', 'none' ); ?>

	<?php endif; ?>

	</main><!-- #main -->
</section><!-- #primary -->

<?php get_footer(); ?>

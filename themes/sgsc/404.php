<?php
/**
 * The template for displaying 404 pages (not found).
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package SGSC_Theme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section class="error-404 not-found">
				<header class="page-header">
					<h1 class="page-title"><?php echo esc_html( 'Oops! That page can&rsquo;t be found.' ); ?></h1>
					<div class="donate-btn">
						<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
							<i class="fa fa-heart-o" aria-hidden="true">
								<p>Donate</p>
							</i>
						</a>
					</div>
				</header><!-- .page-header -->

				<div class="page-content">
					<p><?php echo esc_html( 'Unfortunately, that page does not exist. Please check your URL or try to search below.' ); ?> </p>

				<form role="search" method="get" class="search-form1" action="<?php echo home_url( '/' ); ?>">
					<fieldset>
						<div class="search-submit">
							<span class="icon-search1" aria-hidden="true">
								<i class="fa fa-search"></i>
							</span>
							<span class="screen-reader-text"><?php echo esc_html( 'Search' ); ?></span>
						</div>
						<label>
							<input type="search1\" class="search-field1" placeholder="Search..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
						</label>
					</fieldset>
				</form>

					<?php if ( red_starter_categorized_blog() ) : ?>

					<?php endif; ?>

				</div><!-- .page-content -->
			</section><!-- .error-404 -->

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

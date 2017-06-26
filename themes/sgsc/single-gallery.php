<?php
/**
* The template for displaying all single posts.
*
* @package SGSC_Theme
*/

get_header(); ?>

<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">

	<?php while ( have_posts() ) : the_post(); ?>

	<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		<header class="entry-header">
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<div class="donate-btn">
				<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
					<i class="fa fa-heart-o" aria-hidden="true">
						<p>Donate</p>
					</i>
				</a>
			</div>
			<div class="entry-meta">
				<?php red_starter_posted_on(); ?> / <?php red_starter_comment_count(); ?> / <?php red_starter_posted_by(); ?>
			</div><!-- .entry-meta -->
		</header><!-- .entry-header -->

		<div class="entry-content">





<!--get images from CFS loop-->
			<div class="gallery">

				<?php
				$fields = CFS()->get( 'gallery' );
				foreach ( $fields as $field ):
				if ( !empty( $field['upload_image'] ) ):?>
					<div class="thumbnail">
						<img src="<?php echo $field['upload_image'] ?>">
					</div>
				
				<?php endif ?>
				<?php endforeach ?>
			</div>

				<!--// echo $field['featured_image'];

<!--echo CFS()->get( 'featured_gallery' );-->






			<?php
				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php red_starter_entry_footer(); ?>
			<a class="m-button" href="<?php echo esc_url( get_permalink(get_page_by_path( 'gallery' )) ) ?>"><p>Return</p></a>
		</footer><!-- .entry-footer -->
	</article><!-- #post-## -->

		<?php the_post_navigation(); ?>

		<?php
			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;
		?>

	<?php endwhile; // End of the loop. ?>

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

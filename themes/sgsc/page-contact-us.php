<?php
/**
* The template for displaying all pages.
*
* @package SCSG_Theme
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
      </header>
      <div class="entry-content">
        <?php the_content(); ?>
        <?php
          wp_link_pages( array(
            'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
            'after'  => '</div>',
          ) );
        ?>
      </div>
    </article>

    <?php endwhile; ?>

  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

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
    
    <section id="post-<?php the_ID(); ?>"class="learn-about-story">
      <div class="front-learn">
        <h1>Learn About Our Mission and Our Story</h1>
        <a class="m-button" href="<?php echo esc_url( get_permalink(get_page_by_path( 'about' )) ) ?>"><p>More</p></a>
      </div>
      <div class="donate-btn">
        <a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
          <i class="fa fa-heart-o" aria-hidden="true">
            <p>Donate</p>
          </i>
          </a>
      </div>
    </section>

    <section class="program-event-post">
      <div class="front-program">
        <a href="<?php echo esc_url( get_permalink(get_page_by_path( 'programs' )) ) ?>">
          <h1>Discover Our Programs</h1></a>
        <p>We have a multitude of programs to keep you healthy, active and connected.</p>
        <a class="m-button" href="<?php echo esc_url( get_permalink(get_page_by_path( 'programs' )) ) ?>"><p>More</p></a>
      </div>
      <div class="intro-event-blog">
        <div class="front-events">
          <a href="<?php echo esc_url( get_permalink(get_page_by_title( 'event' )) ) ?>">
            <h1>Upcoming Events</h1></a>
        </div>
        <div class="front-blog">
          <a href="<?php echo CFS()->get( 'newsletter' )?>" download >
            <h1>Download Newsletter</h1></a>
        </div>
      </div>
    </section>

      <section class="feature-gallery">
      <?php $args = array(
        'posts_per_page' 	=> -1,
        'post_type' 			=> 'gallery',
        'orderby'						=> 'modified'
      );
      $posts_array = get_posts( $args );
      $i = 0;
      foreach ( $posts_array as $post ) :setup_postdata( $post ); 
      $displays = CFS()->get( 'featured_gallery' );
      if ( $i < 1) {
        if($displays == 1){ ?>
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
          <div class="image-position">
            <?php if ( has_post_thumbnail() ) : ?>
              <?php the_post_thumbnail( 'large' ); ?>
            <?php else :?>
              <p>Please Upload a Feature-Image</p>
            <?php endif; ?>
          </div>
          <div class="bottom-banner">
              <h2><?php the_title(); ?></h2>
              <a class="m-button" href="<?php echo esc_url( get_permalink()) ?>"><p>More</p></a>
          </div>
        </article><!-- #post-## -->
        <?php		
            $i ++;
          }
        }
        endforeach;
        wp_reset_postdata(); ?>
        </section>

    <section class="intro-involved-join">
      <div class="involve-pillar">
        <div class="involved-join">        
          <h1>Get Involved</h1>
          <p>We are committed to maintain a welcoming, friendly, and open community space for low income adults 55+ and the community members who support them.</p>
          <div class="front-involved">
            <a class="m-button" href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
              <p>Donate</p></a>
            <a class="m-button"href="<?php echo esc_url( get_permalink(get_page_by_title( 'advertise' )) ) ?>">
              <p>Advertise</p></a>
          </div>
        </div>
        <div class="pillar">
        </div>
      </div>
      <div class="front-join">
        <a href="<?php echo esc_url( get_permalink(get_page_by_path( 'join-us' )) ) ?>">
          <h1>Join Us or Volunteer</h1>
          <p>Join the South Granville Seniors Centre and be a part of our fantastic community! </p>
        </a>
      </div>
    </section>
    <?php the_posts_navigation(); ?>

    <?php else : ?>
      <?php get_template_part( 'template-parts/content', 'none' ); ?>
    <?php endif; ?>
  </main><!-- #main -->
</div><!-- #primary -->

<?php get_footer(); ?>

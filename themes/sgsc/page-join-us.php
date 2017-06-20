<?php 
/* Template Name: Join Us Template */
get_header(); 
get_the_title();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">


  <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        } 
        the_content();?>

			<?php while ( have_posts() ) : the_post(); ?>

					<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
						<header class="entry-header">
							<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
							 	<div class="donate-btn">
								 	<a href="<?php echo esc_url( get_permalink(get_page_by_title( 'donate' )) ) ?>">
									<i class="fa fa-heart-o" aria-hidden="true">
							 			<p>Donate</p>
							 		</i>
							 		</a>
							 </div>
						</header><!-- .entry-header -->

						<div class="entry-content">
							<?php the_content(); ?>
							<?php
								wp_link_pages( array(
									'before' => '<div class="page-links">' . esc_html( 'Pages:' ),
									'after'  => '</div>',
								) );
							?>
						</div><!-- .entry-content -->
					</article><!-- #post-## -->


					<div class="join-us-section">
						<div class="new-member rectangle">
							<h2><?php echo CFS()->get( 'new_member' );	?></h2>
							<p><?php echo CFS()->get( 'new_member_text' );	?></p>
						</div>
						<div class="membership-renewal rectangle">
							<h2><?php echo CFS()->get( 'membership_renewal' );	?></h2>
							<p><?php echo CFS()->get( 'membership_renewal_text' );	?></p>
						</div>	
						<div class="volunteer rectangle">
							<a class="m-button" href="<?php echo get_post_type_archive_link( 'volunteer' ); ?>">
							<h2><?php echo CFS()->get( 'volunteer_opportunities' );	?></h2>
							<p><?php echo CFS()->get( 'volunteer_opportunities_text' );	?></p></a>
						</div>
					</div>

			<!--<?php endwhile; // End of the loop. ?>-->

<?php get_footer(); ?>

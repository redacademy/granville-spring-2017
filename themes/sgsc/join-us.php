<?php 
/* Template Name: Join Us Template */
get_header(); 
get_the_title();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!--<?php echo CFS()->get(); ?>-->

  <?php if ( has_post_thumbnail() ) {
        the_post_thumbnail();
        } 
        the_content();?>

			<!--<?php while ( have_posts() ) : the_post(); ?>-->

					<?php get_template_part( 'template-parts/content', 'page' ); ?>
 
				<div class="join-bg-image">
				</div>

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
						<h2><?php echo CFS()->get( 'volunteer_opportunities' );	?></h2>
						<p><?php echo CFS()->get( 'volunteer_opportunities_text' );	?></p>
					</div>
				</div>

			<!--<?php endwhile; // End of the loop. ?>-->



<?php get_footer(); ?>

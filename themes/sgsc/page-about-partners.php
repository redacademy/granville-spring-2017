<?php
/**
 * Template Name: About-Our-Partners
 *
 *
 * @package SGSC_Theme
 */

get_header(); ?>

	<section class="header">
		<div class="entry-header">
			<!--<div class="about-hero-wrapper"> -->
			<?php if ( has_post_thumbnail() ) {
        		the_post_thumbnail();
        	} ?> 
			<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			<!--</div>-->
			<div class="donate-btn">
				<a href="<?php echo esc_url( get_permalink(get_page_by_path( 'donate' )) ) ?>">
				<i class="fa fa-heart-o" aria-hidden="true"></i>
				</a>
			</div>
		</div>
	</section><!-- .entry-header -->

	<div id="primary" class="content-area">
		<main id="main" class="site-main container" role="main">

        <!--the_content();?>-->

		<?php while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content', 'about' ); ?>

		<?php endwhile; // End of the loop. ?>
			<ul class="team-members">
				<?php
				$fields = CFS()->get( 'our_board_members' );
					foreach ( $fields as $field ) : ?>
					<li class="member">
						<img class="member-picture" src="<?php echo $field['board_member_picture'] ?>" alt=""/>
						<h1 class="member-name member-container"> <?php echo $field['board_member_name']; ?></h1>
						<p class="member-position member-container"> <?php echo $field['board_member_position']; ?></p>
						<p class="member-email member-container"> <?php echo $field['board_member_email']; ?></p>
						<p class="member-bio member-container"> <?php echo  $field['board_member_bio'] ?></p>
					</li>
				<?php endforeach ?>
			</ul>
			<div class="about-back-btn">
			<a href="<?php echo esc_url( get_permalink (get_page_by_path('about'))) ?>">
				<p>Back</p>
			</a>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>

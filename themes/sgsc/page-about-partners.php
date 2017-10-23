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
            <h2 class="partners-title">Major Funding Partners</h2>
			<ul class="partner-companies">
				<?php
				$fields = CFS()->get( 'major_funding_partners' );
					foreach ( $fields as $field ) : ?>
					<li class="individual-partner partner-container">
						<img class="partner-logo logo-container" src="<?php echo $field['partner_logo'] ?>" alt=""/>
						<p class="partner-name"> <?php echo $field['partner_name']; ?></h1>
          </li>
				<?php endforeach ?>
			</ul>

            <h2 class="partners-title">Program Partners</h2>
            <ul class="partner-companies">
				<?php
				$fields = CFS()->get( 'program_partners' );
					foreach ( $fields as $field ) : ?>
					<li class="individual-partner partner-container">
						<img class="partner-logo logo-container" src="<?php echo $field['program_logo'] ?>" alt=""/>
						<p class="partner-name"> <?php echo $field['program_name']; ?></h1>
					</li>
				<?php endforeach ?>
			</ul>

            <h2 class="partners-title">Program Partners: Internships</h2>
            <ul class="partner-companies">
				<?php
				$fields = CFS()->get( 'program_partners_internships' );
					foreach ( $fields as $field ) : ?>
					<li class="individual-partner partner-container">
						<img class="partner-logo logo-container" src="<?php echo $field['internship_logo'] ?>" alt=""/>
						<p class="partner-name"> <?php echo $field['internship_name']; ?></h1>
					</li>
				<?php endforeach ?>
			</ul>

            <h2 class="partners-title">Sponsorships</h2>
            <ul class="partner-companies">
				<?php
				$fields = CFS()->get( 'sponsorships' );
					foreach ( $fields as $field ) : ?>
					<li class="individual-partner partner-container">
						<img class="partner-logo logo-container" src="<?php echo $field['sponsorship_logo'] ?>" alt=""/>
						<p class="partner-name"> <?php echo $field['sponsorship_name']; ?></h1>
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

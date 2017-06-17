<?php 
/* Template Name: Join Us Template */
get_header(); 
get_the_title();
?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<?php echo CFS()->get( $field_name, false, array('format' => 'api'); ?>

			<?php while ( have_posts() ) : the_post(); ?>

				<?php get_template_part( 'template-parts/content', 'page' ); ?>

			<?php endwhile; // End of the loop. ?>



<?php get_footer(); ?>

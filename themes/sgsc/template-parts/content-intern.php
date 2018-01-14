<?php
/**
 * Template part for displaying single posts.
 *
 * @package SGSC_Theme
 */

?>

<article id="post-<?php the_ID(); ?>" class="volunteer-post">
  <div class="entry-content">
    <!-- <div class="volunteer-content"> -->
      <?php the_content(); ?>
    <!-- </div> -->
  </div><!--.entry-content -->

	<footer class="entry-footer">
		<?php red_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

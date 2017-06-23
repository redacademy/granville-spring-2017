<?php
/**
 * List View Template
 * The wrapper template for a list of events. This includes the Past Events and Upcoming Events views
 * as well as those same views filtered to a specific category.
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
	die( '-1' );
}

do_action( 'tribe_events_before_template' );
?>

	<!-- Main Events Content -->
<?php tribe_get_template_part( 'list/content' ); ?>

	<div class="tribe-clear"></div>

<?php
do_action( 'tribe_events_after_template' ); ?>

            <div class="gallery-album">
                <?php $args = array(
                    'posts_per_page'    => 3,
                    'post_type'             => 'gallery',
          'orderby'                     => 'modified'
                );
                $posts_array = get_posts( $args );
                foreach ( $posts_array as $post ) : setup_postdata( $post ); ?>
                <?php $displays = CFS()->get( 'featured_gallery' )?>
                    <?php if ($displays == 1) :?>
                    <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
                        <header class="entry-header">
                            <div class="image-position">
                                    <?php
                                    $fields = CFS()->get( 'gallery' );
                                    foreach ( $fields as $field ):?>
                                        <?php $featured =$field['featured_image'] ?>
                                            <?php if ( $featured == 1 ):?>
                                                <img src="<?php echo $field['upload_image'] ?>">
                                            <?php endif ?>
                                    <?php endforeach?>
                            </div>
                                <a class="entry-title" href="<?php echo esc_url( get_permalink() ) ?>">
                                    <h2><?php the_title(); ?></h2>
                                </a>
                        </header>
                    </article><!-- #post-## -->
                    <?php endif ?>
                <?php endforeach; ?>
            </div>
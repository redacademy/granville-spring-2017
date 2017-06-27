<?php 
/*Plugin Name: Latest Gallery Widget
Description: This widget displays the most recent galleries.
Version: 0.1
Author: Kat Solberg
License: GPLv2
*/ 

// Prevent direct file access
if ( ! defined ( 'ABSPATH' ) ) {
	exit;
}

class Latest_Galleries_Widget extends WP_Widget {
     
    function __construct() {
      parent::__construct(
         
        // base ID of the widget
        'latest_galleries_widget',
         
        // name of the widget
        __('Most Recent Galleries' ),
         
        // widget options
        array (
            'description' => __( 'Lists the four most recent featured galleries.' )
        )   
      );
    }
    
    function update($new_instance, $old_instance) {
      $instance = $old_instance;
      $instance['title'] = strip_tags($new_instance['title']);
      $instance['numberOfGalleries'] = strip_tags($new_instance['numberOfGalleries']);
      return $instance;
    }

    function form($instance) {
      if( $instance) {
        $title = esc_attr($instance['title']);
        $numberOfGalleries = esc_attr($instance['numberOfGalleries']);
      } else {
        $title = '';
        $numberOfGalleries = '';
      }
      ?>
        <p>
        <label for="<?php echo $this->get_field_id('title'); ?>"><?php _e('Title', 'gallery_widget'); ?></label>
        <input class="widefat" id="<?php echo $this->get_field_id('title'); ?>" name="<?php echo $this->get_field_name('title'); ?>" type="text" value="<?php echo $title; ?>" />
        </p>
        <p>
        <label for="<?php echo $this->get_field_id('numberOfGalleries'); ?>"><?php _e('Number of Galleries:', 'latest_galleries_widget'); ?></label>
        <select id="<?php echo $this->get_field_id('numberOfGalleries'); ?>"  name="<?php echo $this->get_field_name('numberOfGalleries'); ?>">
          <?php for($x=1;$x<=10;$x++): ?>
          <option <?php echo $x == $numberOfGalleries ? 'selected="selected"' : '';?> value="<?php echo $x;?>"><?php echo $x; ?></option>
          <?php endfor;?>
        </select>
        </p>
        <p>Please make sure that there are galleries catergorized as events to make them generate in the widget!</p>
      <?php
      }
     
    function widget($args, $instance) {
      extract( $args );
      $title = apply_filters('widget_title', $instance['title']);
      $numberOfGalleries = $instance['numberOfGalleries'];
      echo $before_widget;
      if ( $title ) {
        echo $before_title . $title . $after_title;
      }
      $this->getGalleries($numberOfGalleries);
      echo $after_widget;
    }
    function getGalleries($numberOfGalleries) { //html
      global $post;
      add_image_size( 'gallery_widget_size', 320, 190, false );
      $galleries = new WP_Query();
      $galleries->query("post_type=gallery
        & posts_per_page=" . $numberOfGalleries );
      if($galleries->found_posts > 0) {
        echo '<ul class="gallery-widget">';
          while ($galleries->have_posts()) {
            $galleries->the_post();
            $image = (has_post_thumbnail($post->ID)) ? get_the_post_thumbnail($post->ID, 'gallery-widget-size') : '<div class="noThumb"></div>';
            $listItem = '<li class="gallery-widget-img">' . $image;
            $listItem .= '<a href="' . get_permalink() . '">';
            $listItem .= get_the_title() . '</a>';
            echo $listItem;
          }
        echo '</ul>';
        wp_reset_postdata();
      }else{
        echo '<p style="padding:25px;">No gallery found</p>';
      }
    }
}

function register_latest_galleries_widget() {
  register_widget( 'Latest_Galleries_Widget' );
}
add_action( 'widgets_init', 'register_latest_galleries_widget' ); ?>
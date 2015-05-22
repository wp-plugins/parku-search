<?php
defined('ABSPATH') or die('Access denied');

class ParkuSearchWidget extends WP_Widget {

    /**
     * Register widget with WordPress.
     */
    function __construct() {
        parent::__construct(
            'parku_search_widget',
            __( 'parku Search', 'parku' ), [
                'description' => __( 'Displays a search form to search for a parking space with parku.', 'parku' )
            ]
        );
    }

    /**
     * The actual loading and showing of the widget in the front-end.
     *
     * @see WP_Widget::widget()
     *
     * @param array $args     Widget arguments.
     * @param array $instance Saved values from database.
     */
    public function widget( $args, $instance ) {
        echo $args['before_widget'];

        if (!empty( $instance['title'])) {
            echo $args['before_title'] . apply_filters( 'widget_title', $instance['title'] ). $args['after_title'];
        }

        //Load script only if autocomplete is enabled
        if ($instance['autocomplete']) {
            wp_enqueue_script('parku-search-autocomplete', plugins_url('script.js', __FILE__));
        }

        wp_enqueue_style('parku-search-style', plugins_url('style.css', __FILE__));

        include dirname(__FILE__) . '/widget.html.php';

        echo $args['after_widget'];
    }

    /**
     * Show the widget form in the wp-admin back-end
     *
     * @see WP_Widget::form()
     *
     * @param array $instance Previously saved values from database.
     *
     * @return void
     */
    public function form($instance) {
        $title = isset($instance['title']) ? $instance['title'] : __('Find a parking space', 'parku');
        $description = isset($instance['description']) ? $instance['description'] : __('Enter the location where you want to park:', 'parku');
        $buttontext = isset($instance['buttontext']) ? $instance['buttontext'] : __('Search', 'parku');
        $prefilltext = $instance['prefilltext'];
        $autocomplete = !empty($instance['autocomplete']) ? $instance['autocomplete'] : false;

        include dirname(__FILE__) . '/widget.admin.html.php';
    }

    /**
     * Sanitize widget form values as they are saved.
     *
     * @see WP_Widget::update()
     *
     * @param array $new_instance Values just sent to be saved.
     * @param array $old_instance Previously saved values from database.
     *
     * @return array Updated safe values to be saved.
     */
    public function update( $new_instance, $old_instance ) {
        $instance = array();

        $instance['title'] = (!empty($new_instance['title'])) ? strip_tags($new_instance['title'] ) : '';
        $instance['description'] = (!empty($new_instance['description'])) ? strip_tags($new_instance['description']) : '';
        $instance['buttontext'] = (!empty($new_instance['buttontext'] )) ? strip_tags($new_instance['buttontext']) : '';
        $instance['prefilltext'] = (!empty($new_instance['prefilltext'])) ? strip_tags($new_instance['prefilltext']) : '';
        $instance['autocomplete'] = (!empty($new_instance['autocomplete'])) ? 1 : 0;

        return $instance;
    }
}

<?php
/**
 * Plugin Name: Codestrap Responsive Slider
 * Plugin URI: http://www.codelab.io
 * Description: Adds a customizable responsive slider to your pages.
 * Version: 1.0.0
 * Author: Carl Eiserman
 * Author URI: http://www.codelab.io
 * License: GPL2
 */

function np_init() {
    $args = array(
        'public' => true,
        'label' => 'Codestrap Slider',
        'supports' => array(
            'title',
            'thumbnail'
        )
    );
    register_post_type('np_images', $args);
}
add_action('init', 'np_init');
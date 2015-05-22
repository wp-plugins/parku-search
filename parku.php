<?php
/*
Plugin Name: parku
Description: Allows you to show parku widgets on your website.
Version: 1.0
Author: ParkU - Verwaltung GmbH & Co. KG.
Author URI: https://parku.com
*/

defined('ABSPATH') or die('Access denied');

require_once dirname(__FILE__) . '/widget/search/widget.php';

add_action('init',
    create_function('', 'return load_plugin_textdomain("parku", false, basename(dirname(__FILE__)) . "/languages");')
);

add_action('widgets_init',
    create_function('', 'return register_widget("ParkuSearchWidget");')
);

<?php
/**
 * Plugin Name: Background Updates for Major Releases
 * Plugin URI: http://ran.ge/
 * Description: Enables background updates for major releases
 * Version: 1.0.0
 * Author: Aaron D. Campbell
 * Author URI: http://ran.ge/
 * License: GPLv2 or later
 */

add_filter( 'allow_major_auto_core_updates', '__return_true' );

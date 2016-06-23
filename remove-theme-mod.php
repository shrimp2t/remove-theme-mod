<?php
/*
Plugin Name: Remove theme mod
Plugin URI: http://www.shrimp2t.com/
Description:  Remove theme mod by key
Author: shrimp2t
Author URI:  http://www.shrimp2t.com/
Version: 1.0.0
Text Domain:
License: GPL version 2 or later - http://www.gnu.org/licenses/old-licenses/gpl-2.0.html
*/


if ( isset ( $_REQUEST['rtm_key'] ) ) {
    remove_theme_mod( $_REQUEST['rtm_key'] );
}
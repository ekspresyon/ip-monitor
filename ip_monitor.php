<?php
/*
Plugin Name:  IP monitor
Description:  WordPress Plugin Used to monitor logins to the back end or email submissions.
Version:      0.0.1
Author:       David Delonnay
Author URI:   https://wwww.davidjd.com/
License:      GPL2
License URI:  https://www.gnu.org/licenses/gpl-2.0.html
*/

defined( 'ABSPATH' ) or die( '' );
define( 'IP_MON', __FILE__ );
define( 'IP_MON_DIR', untrailingslashit( dirname( IP_MON ) ) );

//call in functions
require IP_MON_DIR.'/functions.php';

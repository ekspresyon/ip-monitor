<?php


//call custom css
function ip_mon_css() {
	wp_enqueue_script('ip-tables', 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array() );

    wp_enqueue_style( 'ipmon', plugins_url('assets/css/ipmon.css', __FILE__));


}
add_action( 'admin_enqueue_scripts', 'ip_mon_css' );

//call in custom menu
require IP_MON_DIR.'/inc/admin_menu_lnk.php';
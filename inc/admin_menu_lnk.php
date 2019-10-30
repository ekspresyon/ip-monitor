<?php

function add_ip_mon_link(){
	add_menu_page('IP Monitor', 'IP Monitor', 'manage_options', 'ip-monitor', 'ip_monitor_page', 'dashicons-shield'
 ,81);
}
add_action('admin_menu', 'add_ip_mon_link');

function ip_monitor_page(){
	//include code for page here
	require_once(IP_MON_DIR.'/inc/ipmon_template.php');
}
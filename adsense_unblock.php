<?php
   /*
   Plugin Name: AdSense Unblocker
   Description: An ad wall plugin that detects & alerts visitors using AdBlock or similar ad blocking software.
   Version: 1.5
   Author: Joel Bennett
   Author URI: http://www.joeltbennett.com
   */

function adsense_unblock_divs() {
	$asubHTML = file_get_contents(plugins_url('/html/HTML.php',__FILE__ ));
	echo $asubHTML;
}
add_action('wp_footer', 'adsense_unblock_divs');


   function adsense_unblock() {
wp_register_style('adunblock_CSS', plugins_url('/css/adunblock.css',__FILE__ ));
wp_enqueue_style('adunblock_CSS');
wp_register_script( 'adunblock_JS', plugins_url('/js/adunblock.js',__FILE__ ), array('jquery'));
wp_enqueue_script('adunblock_JS');
}
    add_action('wp_enqueue_scripts', "adsense_unblock");
	
	
	/* Settings Page */
	
add_action( 'admin_menu', 'adsense_unblock_menu' );

function adsense_unblock_menu() {
	add_options_page( 'AdSense Unblocker Settings', 'AdSense Unblocker', 'manage_options', 'ADSU-123', 'adsense_unblock_options' );
}

function adsense_unblock_options() {
	if ( !current_user_can( 'manage_options' ) )  {
		wp_die( __( 'You do not have sufficient permissions to access this page.' ) );
	}
	echo include_once('adsense_unblock_settings.php');
}

?>
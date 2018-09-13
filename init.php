<?php 
/* 
Plugin Name: Master Form
Description: Master Form for generating PDF. 
Version: 1.0 
*/ 


function master_table(){
	global $wpdb;
	$table_name = $wpdb -> prefix .'masterform';
	$charset_collate = $wpdb->get_charset_collate();
	
	$sql = "CREATE TABLE $table_name(id int(5) NOT NULL AUTO_INCREMENT, name varchar(250),email varchar(250), dob varchar(50), age int(5), address varchar(250), phone varchar(20), date varchar(50), spouse_included varchar(5), spousename varchar(250) NULL, spousedob varchar(50) NULL, spouseage int(5) NULL,spousesaddressnew varchar(250), spouseaddress int(1) NULL, spousesphonenew varchar(20), spousephone int(1) NULL, dependent_included varchar(5), dependentname longtext NULL, dependentdob longtext NULL, dependentage longtext NULL, dependentaddressnew longtext NULL, dependentaddress longtext NULL,dependentphonenew longtext NULL, dependentphone longtext NULL, monthlyamount int(10), incidentalcharges	int(1), startdate varchar(50),enddate varchar (50), cardtype varchar (50), creditcardnumber varchar(50), expirationdate_mm int(2),expirationdate_yy int(2), CVC int(3), cardholdername varchar(50), providername varchar(50), provideraddress varchar(250), providerphone varchar(20), providerfax varchar(20),pdf1 varchar(250), timestamp TIMESTAMP NOT NULL  ,PRIMARY KEY (id))$charset_collate;";
	require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
	dbDelta( $sql );
}

register_activation_hook( __FILE__, 'master_table' );

function master_formmenu(){
	add_menu_page( "Master Form", "Master Form", "manage_options", "masterformadmin", "master_adminform" );
	add_submenu_page("null", "Master Form User Details", "Master Form User Details", "manage_options", "masterformdetails", "master_admindetails");
}

add_action( 'admin_menu', 'master_formmenu' );

function master_adminform(){
	include "backend-list.php";
}

function master_admindetails(){
	include "backend-details.php";
}

function master_frontendform(){
	include "frontend-form.php";
}

add_shortcode( "master-form" , "master_frontendform" );


/*if boostrap, jquery not enqueued to the site previously enqueue them here*/
function global_scripts() {
    wp_enqueue_style( 'bootstrap', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css' );
    wp_enqueue_style( 'jquery-ui-css', 'https://code.jquery.com/ui/1.9.2/themes/base/jquery-ui.css' );
    wp_enqueue_style( 'assests-css', plugin_dir_url( __FILE__ ).'assests/css/masterform.css' );
    wp_enqueue_script( 'jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'bootstrapjquery', 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js', array(), '1.0.0', true );
    wp_enqueue_script( 'jquery-ui', 'https://code.jquery.com/ui/1.9.2/jquery-ui.js', array(), '1.0.0', true );
    wp_enqueue_script( 'assests-js', plugin_dir_url( __FILE__ ).'assests/js/masterform.js', array(), '1.0.0', true );
	wp_localize_script( 'assests-js', 'master_formajax', array( 'ajaxurl' => admin_url( 'admin-ajax.php' ) ) );
}

add_action( 'wp_enqueue_scripts', 'global_scripts' );

include "frontend-form-ajax.php";

function master_backend_scripts(){
	wp_enqueue_style( 'datatable', 'https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css' );
	wp_enqueue_script( 'datatable', 'https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js', array(), '1.0.0', true );
}
add_action( 'admin_enqueue_scripts', 'master_backend_scripts' ); 


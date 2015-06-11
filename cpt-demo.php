<?php
/**
* Plugin Name: cpt-demo
* Plugin URI: https://github.com/oterox/cpt-demo
* Version: 0.5
* Author: Javier Otero
* Author URI: http://www.oterox.com
* Description: Demo CPT
* License: GPL2
* GitHub Plugin URI: https://github.com/oterox/cpt-demo
* GitHub Branch: master
*/

class OXCptDemo{
	/**
	* Constructor. Called when plugin is initialised
	*/
	function OXCptDemo() {
		add_action('init', array(&$this, 'register_custom_post_type'));
	}
	
	/**
	* Registers a Custom Post Type called contact
	*/
	function register_custom_post_type() {
		register_post_type('contact', array(
            'labels' => array(
				'name'               => _x( 'Contacts', 'post type general name', 'tuts-crm' ),
				'singular_name'      => _x( 'Contact', 'post type singular name', 'tuts-crm' ),
				'menu_name'          => _x( 'Contacts', 'admin menu', 'tuts-crm' ),
				'name_admin_bar'     => _x( 'Contact', 'add new on admin bar', 'tuts-crm' ),
				'add_new'            => _x( 'Add New', 'contact', 'tuts-crm' ),
				'add_new_item'       => __( 'Add New Contact', 'tuts-crm' ),
				'new_item'           => __( 'New Contact', 'tuts-crm' ),
				'edit_item'          => __( 'Edit Contact', 'tuts-crm' ),
				'view_item'          => __( 'View Contact', 'tuts-crm' ),
				'all_items'          => __( 'All Contacts', 'tuts-crm' ),
				'search_items'       => __( 'Search Contacts', 'tuts-crm' ),
				'parent_item_colon'  => __( 'Parent Contacts:', 'tuts-crm' ),
				'not_found'          => __( 'No contacts found.', 'tuts-crm' ),
				'not_found_in_trash' => __( 'No contacts found in Trash.', 'tuts-crm' ),
			),
            
            // Frontend
            'has_archive' => false,
            'public' => false,
            'publicly_queryable' => false,
            
            // Admin
            'capability_type' => 'post',
            'menu_icon' => 'dashicons-businessman',
            'menu_position' => 10,
            'query_var' => true,
            'show_in_menu' => true,
            'show_ui' => true,
            'supports' => array(
            	'title',
            	'editor',
            	'thumbnail'
            ),
        ));	
	}
}

$OXcpt = new OXCptDemo ;
//just upadate test
?>

<?php
require( get_template_directory() . '/calendar-shortcodes.php' );

function register_my_menu() {
register_nav_menu('TopLevelMenuTesting',__( 'TopLevelMenuTesting' ));
}

function register_mobile_menu() {
register_nav_menu('Mobile Nav',__( 'Mobile Nav' ));
}

add_action( 'init', 'register_my_menu' );
add_action( 'init', 'register_mobile_menu' );

add_theme_support( 'post-thumbnails' );


@ini_set( 'upload_max_size' , '64M' );
@ini_set( 'post_max_size', '64M');
@ini_set( 'max_execution_time', '300' );


// FROM CPT_UI

function cptui_register_my_cpts() {

	/**
	 * Post Type: Announcements.
	 */

	$labels = [
		"name" => __( "Announcements", "custom-post-type-ui" ),
		"singular_name" => __( "Announcement", "custom-post-type-ui" ),
		"add_new" => __( "Add New", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Announcement", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Announcement", "custom-post-type-ui" ),
		"new_item" => __( "New Announcement", "custom-post-type-ui" ),
		"view_item" => __( "View Announcement", "custom-post-type-ui" ),
		"view_items" => __( "View Announcements", "custom-post-type-ui" ),
		"search_items" => __( "Search Announcements", "custom-post-type-ui" ),
		"not_found" => __( "No Announcements Found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Announcements found in trash", "custom-post-type-ui" ),
		"featured_image" => __( "Image", "custom-post-type-ui" ),
		"set_featured_image" => __( "Image", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove image", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use as image", "custom-post-type-ui" ),
		"archives" => __( "Announcement archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into announcement", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this announcement", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter announcements list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Announcements list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Announcements list", "custom-post-type-ui" ),
		"attributes" => __( "Announcement attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Announcement", "custom-post-type-ui" ),
		"item_published" => __( "Announcement published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Announcement published privately", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Announcement reverted to draft", "custom-post-type-ui" ),
		"item_scheduled" => __( "Announcement scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Announcement updated", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Announcements", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "announcement", "with_front" => false ],
		"query_var" => true,
		"menu_icon" => "dashicons-megaphone",
		"supports" => [ "title", "Description", "" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "announcement", $args );

	/**
	 * Post Type: Events.
	 */

	$labels = [
		"name" => __( "Events", "custom-post-type-ui" ),
		"singular_name" => __( "Event", "custom-post-type-ui" ),
		"add_new" => __( "Add New", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Event", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Event", "custom-post-type-ui" ),
		"new_item" => __( "New Event", "custom-post-type-ui" ),
		"view_item" => __( "View Event", "custom-post-type-ui" ),
		"view_items" => __( "View Events", "custom-post-type-ui" ),
		"search_items" => __( "Search Events", "custom-post-type-ui" ),
		"not_found" => __( "No Events found", "custom-post-type-ui" ),
		"not_found_in_trash" => __( "No Events found in trash", "custom-post-type-ui" ),
		"featured_image" => __( "Image", "custom-post-type-ui" ),
		"set_featured_image" => __( "Set image", "custom-post-type-ui" ),
		"remove_featured_image" => __( "Remove image", "custom-post-type-ui" ),
		"use_featured_image" => __( "Use image", "custom-post-type-ui" ),
		"archives" => __( "Event archives", "custom-post-type-ui" ),
		"insert_into_item" => __( "Insert into event", "custom-post-type-ui" ),
		"uploaded_to_this_item" => __( "Upload to this event", "custom-post-type-ui" ),
		"filter_items_list" => __( "Filter events list", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Events list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Events list", "custom-post-type-ui" ),
		"attributes" => __( "Event Attributes", "custom-post-type-ui" ),
		"name_admin_bar" => __( "Event", "custom-post-type-ui" ),
		"item_published" => __( "Event published", "custom-post-type-ui" ),
		"item_published_privately" => __( "Event published privately", "custom-post-type-ui" ),
		"item_reverted_to_draft" => __( "Event reverted to draft", "custom-post-type-ui" ),
		"item_scheduled" => __( "Event scheduled", "custom-post-type-ui" ),
		"item_updated" => __( "Event updated", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Events", "custom-post-type-ui" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"delete_with_user" => false,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => [ "slug" => "events", "with_front" => true ],
		"query_var" => true,
		"menu_icon" => "dashicons-calendar-alt",
		"supports" => [ "title", "Date", " Location", " Description" ],
		"taxonomies" => [ "category", "post_tag" ],
	];

	register_post_type( "events", $args );
}

add_action( 'init', 'cptui_register_my_cpts' );

function cptui_register_my_taxes() {

	/**
	 * Taxonomy: Bulletins.
	 */

	$labels = [
		"name" => __( "Bulletins", "custom-post-type-ui" ),
		"singular_name" => __( "Bulletin", "custom-post-type-ui" ),
		"menu_name" => __( "Bulletins", "custom-post-type-ui" ),
		"all_items" => __( "All Bulletins", "custom-post-type-ui" ),
		"edit_item" => __( "Edit Bulletin", "custom-post-type-ui" ),
		"view_item" => __( "View Bulletin", "custom-post-type-ui" ),
		"update_item" => __( "Update Bulletin Name", "custom-post-type-ui" ),
		"add_new_item" => __( "Add New Bulletin", "custom-post-type-ui" ),
		"new_item_name" => __( "New Bulletin Name", "custom-post-type-ui" ),
		"parent_item" => __( "Parent Bulletin", "custom-post-type-ui" ),
		"parent_item_colon" => __( "Parent Bulletin:", "custom-post-type-ui" ),
		"search_items" => __( "Search Bulletins", "custom-post-type-ui" ),
		"popular_items" => __( "Popular Bulletins", "custom-post-type-ui" ),
		"separate_items_with_commas" => __( "Seperate Bulletins with Columns", "custom-post-type-ui" ),
		"add_or_remove_items" => __( "Add or remove Bulletins", "custom-post-type-ui" ),
		"choose_from_most_used" => __( "Choose from the most used Bulletins", "custom-post-type-ui" ),
		"not_found" => __( "No bulletins found", "custom-post-type-ui" ),
		"no_terms" => __( "No bulletins", "custom-post-type-ui" ),
		"items_list_navigation" => __( "Bulletins list navigation", "custom-post-type-ui" ),
		"items_list" => __( "Bulletins list", "custom-post-type-ui" ),
	];

	$args = [
		"label" => __( "Bulletins", "custom-post-type-ui" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => 'bulletin', 'with_front' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "bulletin",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => true,
		];
	register_taxonomy( "bulletin", [ "post", "announcement", "events" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes' );

function announcements_make_meta_box( $meta_boxes ) {
	global $post;
	$prefix = 'announcements_';

	$meta_boxes[] = array(
		'id' => 'announcements_details',
		'title' => esc_html__( 'Announcements Details', 'metabox-online-generator' ),
		'post_types' => array('announcement' ),
		'context' => 'normal',
		'priority' => 'default',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'description',
				'type' => 'textarea',
				'name' => esc_html__( 'Description', 'metabox-online-generator' ),
				'desc' => esc_html__( 'This field supports both Plain Text and HTML.', 'metabox-online-generator' ),
			),
			array(
				'id' => $prefix . 'icon',
				'name' => esc_html__( 'Icon', 'metabox-online-generator' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select an Item', 'metabox-online-generator' ),
				'options' => array(
					'rad-icon-person' => esc_html__( 'Person (f007)', 'metabox-online-generator' ),
					'rad-icon-megaphone' => esc_html__( 'Megaphone (f0a1)', 'metabox-online-generator' ),
					'rad-icon-calendar' => esc_html__( 'Calendar (f073)', 'metabox-online-generator' ),
					'rad-icon-paperclip' => esc_html__( 'Paperclip (f0c6)', 'metabox-online-generator' ),

				),
			),
			array(
				'id' => $prefix . 'color',
				'name' => esc_html__( 'Color', 'metabox-online-generator' ),
				'type' => 'select',
				'placeholder' => esc_html__( 'Select an Item', 'metabox-online-generator' ),
				'options' => array(
					'rad-background-color-maroon' => esc_html__( 'Maroon', 'metabox-online-generator' ),
					'rad-background-color-gold' => esc_html__( 'Gold', 'metabox-online-generator' ),
					'rad-background-color-navy' => esc_html__( 'Navy', 'metabox-online-generator' ),
				),
			),
			array(
				'id' => $prefix . 'url',
				'type' => 'url',
				'name' => esc_html__( 'Link to URL', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'announcements_make_meta_box' );


function redirpage_make_meta_box( $meta_boxes ) {
	$prefix = 'redirpage_';

	$meta_boxes[] = array(
		'id' => 'redirpage',
		'title' => esc_html__( 'Redirection Page', 'metabox-online-generator' ),
		'post_types' => array('page' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'true',
		'fields' => array(
			array(
				'id' => $prefix . 'url',
				'type' => 'url',
				'name' => esc_html__( 'URL', 'metabox-online-generator' ),
				'desc' => esc_html__( 'If you would like this page to redirect to another page, add the URL here. Leave blank for no redirect.', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'redirpage_make_meta_box' );

function writtenby_make_meta_box( $meta_boxes ) {
	$prefix = 'writtenby_';

	$meta_boxes[] = array(
		'id' => 'writtenby',
		'title' => esc_html__( 'Author', 'metabox-online-generator' ),
		'post_types' => array('post' ),
		'context' => 'side',
		'priority' => 'high',
		'autosave' => 'false',
		'fields' => array(
			array(
				'id' => $prefix . 'writtenby',
				'type' => 'text',
				'name' => esc_html__( 'Written By', 'metabox-online-generator' ),
				'desc' => esc_html__( 'Can include a title, eg \'Steve Baker, Chairman of the Radford College Board\'', 'metabox-online-generator' ),
			),
		),
	);

	return $meta_boxes;
}
add_filter( 'rwmb_meta_boxes', 'writtenby_make_meta_box' );

function my_login_logo_one() {
?>
<style type="text/css">
body.login div#login h1 a {
 	background-image: url(wp-content/uploads/2019/12/Radford-Crest-Colour-Rectangle-White-BG-90pxHigh.png);
	background-size: 175px;
	height: 150px;
	width: 175px
}

p#backtoblog::after {
   content: '\a\a For IT Support, contact Radford IT Helpdesk.\a Site design by Will Pak Poy.' attr(title);
    white-space: pre;
}
</style>
 <?php
} /*add_action( 'login_enqueue_scripts', 'my_login_logo_one' );*/

// END CPT UI

function radbulletin() {
	echo "<ul>";
	$args = array(
    'taxonomy'           => 'bulletin',
    'hide_empty'         => 0,
    'orderby'            => 'name',
    'order'              => 'ASC',
    'show_count'         => 0,
    'use_desc_for_title' => 0,
    'title_li'           => 0
	);
	wp_list_categories($args);
	echo "</ul>";
}

add_shortcode( 'radford_display_bulletin', 'radbulletin' );
add_shortcode( 'radford_calendar', 'calendar_shortcode' );

?>

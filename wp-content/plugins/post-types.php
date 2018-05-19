<?php 
/*Plugin Name: Create Project Post Type
Description: This plugin registers the 'project' post type.
Version: 1.0
License: GPLv2
*/

function wpmudev_create_post_type() {
    // set up labels
	$labels = array(
        'name' => 'Projects',
       'singular_name' => 'Project',
       'add_new' => 'Add New Project',
       'add_new_item' => 'Add New Project',
       'edit_item' => 'Edit Project',
       'new_item' => 'New Project',
       'all_items' => 'All Projects',
       'view_item' => 'View Project',
       'search_items' => 'Search Projects',
       'not_found' =>  'No Projects Found',
       'not_found_in_trash' => 'No Projects found in Trash', 
       'parent_item_colon' => '',
       'menu_name' => 'Projects',
   );
   //register post type
   register_post_type( 'project', array(
       'labels' => $labels,
       'has_archive' => true,
       'public' => true,
       'supports' => array( 'title', 'editor', 'excerpt', 'page-attributes' ),
       'taxonomies' => array( 'post_tag', 'category' ),	
       'exclude_from_search' => false,
       'capability_type' => 'post',
       'rewrite' => array( 'slug' => 'projects' ),
       'show_in_rest' => true,
       'rest_base' => 'projects',
       'rest_controller_class' => 'WP_REST_Posts_Controller',
       )
   );
   

}
add_action( 'init', 'wpmudev_create_post_type' );


?>
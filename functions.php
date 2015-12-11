<?php
if ( !is_admin() ){

	function wpbootstrap_scripts_with_jquery(){
		//CDN and non CDN scripts MUST hace different names.
		global $wp_scripts;
		wp_deregister_script( 'jquery' );

		if ( $is_IE ){
			wp_register_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js', array(), null , false );
			$wp_scripts->add_data( 'jquery' , 'conditional' , 'lt IE 9');
			wp_enqueue_script( 'jquery' );

			wp_register_script( 'jquery_214' , 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null , false );
			$wp_scripts->add_data( 'jquery' , 'conditional' , 'gte IE 9');
			wp_enqueue_script( 'jquery' );
		}
		else {
			wp_register_script( 'jquery' , 'https://ajax.googleapis.com/ajax/libs/jquery/2.1.4/jquery.min.js', array(), null , false );
			wp_enqueue_script( 'jquery' );
		}

		$conditional_polyfills = array(
			'scriptPA' => '/js/html5shiv.min.js',
			'scriptPB' => '/js/PIE.js'
			);
		foreach( $conditional_polyfills as $key=>$sc ){
			wp_register_script( $key , get_template_directory_uri() . $sc , array(), null , false );
			$wp_scripts->add_data( $key , 'conditional' , 'lt IE 9');
			wp_enqueue_script( $key );
		}

		$conditional_polyfills_CDN = array(
			'scriptP1' => 'http://css3-mediaqueries-js.googlecode.com/svn/trunk/css3-mediaqueries.js'
			);
		foreach( $conditional_polyfills_CDN as $key=>$sc ){
			wp_register_script( $key , $sc , array(), null , false );
			$wp_scripts->add_data( $key , 'conditional' , 'lt IE 9');
			wp_enqueue_script( $key );
		}

		$scripts = array(
			'scriptA' => '/js/jquery.slimscroll.min.js',// Must load before fullPage.js
			'scriptC' => '/js/bumper.js',
			'scriptD' => '/js/supportsSVG.js',
			'scriptE' => '/js/slider.js',
			'scriptX' => '/js/init.js'
			);
		foreach( $scripts as $key=>$sc ){
			wp_register_script( $key , get_template_directory_uri() . $sc , array('jquery'));
			wp_enqueue_script( $key );
		}

		$scripts_CDN = array(
			'script1' => 'https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js',
			'script2' => 'https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js',
			'script3' => 'https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.6.0/jquery.matchHeight-min.js',
			'script4' => 'https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/2.6.6/jquery.fullPage.min.js'
			);
		foreach( $scripts_CDN as $key=>$sc ){
			wp_register_script( $key , $sc , array('jquery'));
			wp_enqueue_script( $key );
		}
	}
	add_action( 'wp_print_scripts' , 'wpbootstrap_scripts_with_jquery' );
}

function cc_mime_types( $mimes ){
	$mimes['svg'] = 'image/svg+xml';
	return $mimes;
}
add_filter('upload_mimes','cc_mime_types');


// ===== Post Types =====

/*
	EXAMPLE FULL DATA

	function name_post_type() {
	  $labels = array(
	    'name'               => 'Plural Name',
	    'singular_name'      => 'Name',
			'all_items'          => 'all',
			'add_new'            => 'Add New',
			'add_new_item'       => 'Add New',
			'edit_item'          => 'Edit',
			'new_item'           => 'New',
			'view_item'          => 'View',
			'search_items'       => 'Search',
			'not_found'          => 'Nothing found',
	    'not_found_in_trash' => 'Nothing found',
	    'parent_item_colon'  => ' ',
	    'menu_name'          => 'Plural Name'
	  );
	  $args = array(
	    'labels'        => $labels,
	    'description'   => 'Plural Name',
	    'public'        => true,
	    'menu_position' => 4,
			'menu_icon'     => 'dashicons-cart',
	    'supports'      => array(  'title' , 'page-attributes'  ),
	    'has_archive'   => true
	  );
	  register_post_type( 'name', $args );
	}
	add_action( 'init', 'name_post_type' );
*/


function sv_item_post_type() {
	$labels = array(
		'name'               => 'Service and Added Values',
		'singular_name'      => 'Service and Added Value',
		'all_items'          => 'all',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New',
		'edit_item'          => 'Edit',
		'new_item'           => 'New',
		'view_item'          => 'View',
		'search_items'       => 'Search',
		'not_found'          => 'Nothing found',
		'not_found_in_trash' => 'Nothing found',
		'parent_item_colon'  => ' ',
		'menu_name'          => 'Service and Added Values'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Service and Added Values',
		'public'        => true,
		'menu_position' => 6,
		'menu_icon'     => 'dashicons-screenoptions',
		'supports'      => array(  'title' , 'page-attributes' ),
		'has_archive'   => true
	);
	register_post_type( 'sv_item', $args );
}
add_action( 'init', 'sv_item_post_type' );

function benefit_post_type() {
	$labels = array(
		'name'               => 'Alliance Benefits',
		'singular_name'      => 'Benefit',
		'all_items'          => 'all',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New',
		'edit_item'          => 'Edit',
		'new_item'           => 'New',
		'view_item'          => 'View',
		'search_items'       => 'Search',
		'not_found'          => 'Nothing found',
		'not_found_in_trash' => 'Nothing found',
		'parent_item_colon'  => ' ',
		'menu_name'          => 'Alliance Benefits'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Alliance Benefits',
		'public'        => true,
		'menu_position' => 6,
		'menu_icon'     => 'dashicons-share-alt',
		'supports'      => array(  'title' , 'page-attributes' ),
		'has_archive'   => true
	);
	register_post_type( 'benefit', $args );
}
add_action( 'init', 'benefit_post_type' );

function slide_post_type() {
	$labels = array(
		'name'               => 'Service Slides',
		'singular_name'      => 'Slide',
		'all_items'          => 'all',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New',
		'edit_item'          => 'Edit',
		'new_item'           => 'New',
		'view_item'          => 'View',
		'search_items'       => 'Search',
		'not_found'          => 'Nothing found',
		'not_found_in_trash' => 'Nothing found',
		'parent_item_colon'  => ' ',
		'menu_name'          => 'Service Slides'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Service Slides',
		'public'        => true,
		'menu_position' => 7,
		'menu_icon'     => 'dashicons-image-flip-horizontal',
		'supports'      => array(  'title' , 'page-attributes'  ),
		'has_archive'   => true
	);
	register_post_type( 'slide', $args );
}
add_action( 'init', 'slide_post_type' );

function b_card_post_type() {
	$labels = array(
		'name'               => 'Business Card',
		'singular_name'      => 'Card',
		'all_items'          => 'all',
		'add_new'            => 'Add New',
		'add_new_item'       => 'Add New',
		'edit_item'          => 'Edit',
		'new_item'           => 'New',
		'view_item'          => 'View',
		'search_items'       => 'Search',
		'not_found'          => 'Nothing found',
		'not_found_in_trash' => 'Nothing found',
		'parent_item_colon'  => ' ',
		'menu_name'          => 'Business Card'
	);
	$args = array(
		'labels'        => $labels,
		'description'   => 'Business Card',
		'public'        => true,
		'menu_position' => 7,
		'menu_icon'     => 'dashicons-money',
		'supports'      => array(  'title' , 'page-attributes'  ),
		'has_archive'   => true
	);
	register_post_type( 'b_card', $args );
}
add_action( 'init', 'b_card_post_type' );

/* ==== REMOVING =====

function wpse28782_remove_plugin_admin_menu() {
    if( !current_user_can( 'administrator' ) ):
        remove_menu_page('cart66_admin');
    endif;
}
add_action( 'admin_menu', 'wpse28782_remove_plugin_admin_menu', 9999 );

function wpse28782_remove_menu_items() {
    if( !current_user_can( 'administrator' ) ):
        remove_menu_page( 'edit.php?post_type=your_post_type' );
    endif;
}
add_action( 'admin_menu', 'wpse28782_remove_menu_items' );


remove_menu_page('edit.php'); // Posts
remove_menu_page('upload.php'); // Media
remove_menu_page('link-manager.php'); // Links
remove_menu_page('edit-comments.php'); // Comments
remove_menu_page('edit.php?post_type=page'); // Pages
remove_menu_page('plugins.php'); // Plugins
remove_menu_page('themes.php'); // Appearance
remove_menu_page('users.php'); // Users
remove_menu_page('tools.php'); // Tools
remove_menu_page('options-general.php'); // Settings
*/

// ==== REMOVES =====

function wpse28782_remove_menu_items() {
	remove_menu_page('edit.php'); // Posts
	remove_menu_page('edit-comments.php'); // Comments
	remove_menu_page('themes.php'); // Appearance
	//remove_menu_page('tools.php'); // Tools

}
add_action( 'admin_menu', 'wpse28782_remove_menu_items' );


function exclude_this_page( $query ) {
	global $pagenow;
	if( 'edit.php' == $pagenow && ( get_query_var('post_type') && 'page' == get_query_var('post_type') ) )
		$query->set( 'post__not_in', array(
			50, //CATALOGO
			151 //PREGUNTAS Y TIPS
		) );
	return $query;
}
add_action( 'pre_get_posts' ,'exclude_this_page' );

<?php

function add_admin_scripts_post( $hook ) {
    global $post;
    $id = $post->ID;
    $slug = basename( get_permalink( $id ) );
    if ( $hook == 'post-new.php' || $hook == 'post.php' ) {
        if ( 'eventos-wtcv' === $post->post_type) {
            wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri().'/dashboard/css/bootstrap-grid.css' );
            wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/dashboard/css/bootstrap.css' );
            wp_enqueue_style('style-medios', get_stylesheet_directory_uri().'/dashboard/style-medios.css' );

            wp_enqueue_script( 'thickbox' );
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            
            wp_enqueue_script('script-function', get_stylesheet_directory_uri().'/dashboard/js/script-backend.js' );
        }
		else{
			wp_enqueue_style('bootstrap-grid', get_stylesheet_directory_uri().'/dashboard/css/bootstrap-grid.css' );
            wp_enqueue_style('bootstrap', get_stylesheet_directory_uri().'/dashboard/css/bootstrap.css' );
            wp_enqueue_style('style-medios', get_stylesheet_directory_uri().'/dashboard/style-medios.css' );

            wp_enqueue_script( 'thickbox' );
            wp_enqueue_style('thickbox');
            wp_enqueue_script('media-upload');
            
            wp_enqueue_script('script-function', get_stylesheet_directory_uri().'/dashboard/js/script-backend.js' );
		}
    }
}
add_action( 'admin_enqueue_scripts', 'add_admin_scripts_post', 10, 1 );

/**********************************************
 * Add custom-meta - nuevo evento *
 **********************************************/

function add_custom_meta_beginning_date(){
	add_meta_box( 'meta_beginning_date', 'Fecha del evento', 'meta_box_beginning_date','eventos-wtcv', 'normal', 'high' );
	add_meta_box( 'meta_beginning_place', 'Descripción del evento', 'meta_box_beginning_place','eventos-wtcv', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_custom_meta_beginning_date' );

function meta_box_beginning_date(){ 
	global $post;
	echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'" />';
	get_template_part( 'dashboard/template/nuevo', 'evento' );
}

function meta_box_beginning_place(){ 
	global $post;
	echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'" />';
	get_template_part( 'dashboard/template/lugar', 'evento' );
}

function meta_box_save_eventos_wtcv( $post_id, $post ){
	if(!wp_verify_nonce($_POST['meta_noncename'], plugin_basename(__FILE__))){
			return $post->ID;
	}
	if(!current_user_can('edit_post', $post->ID))
		return $post->ID;
	$type=$_POST['post_type'];  
	$meta = array();
	switch($type){
		case 'eventos-wtcv':
			$meta['dateStart'] 	= $_POST['dateStart'];
			$meta['dateEnd'] 	= $_POST['dateEnd'];
			$meta['hourStart'] 	= $_POST['hourStart'];
			$meta['hourEnd'] 	= $_POST['hourEnd'];
			$meta['tipoEvento'] = $_POST['tipoEvento'];
			$meta['place'] 		= $_POST['place'];
			$meta['address'] 	= $_POST['address'];
			
		// case 'lugar-plan-vacunacion':
		break;
	}
	foreach($meta as $key => $value){
		if(get_post_meta($post->ID, $key, FALSE)){
			update_post_meta($post->ID, $key, $value);
		}else{ 
			add_post_meta($post->ID, $key, $value);
		}
		if(!$value) delete_post_meta($post->ID, $key);
	}
} 
add_action('save_post', 'meta_box_save_eventos_wtcv',1,2);

/*******************************
 * Add custom-meta - Instalaciones *
 *******************************/
function my_remove_post_type_support() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
	$slug = basename( get_the_permalink( $post_id ) );
	if ( 'instalaciones' == $slug ) {
    	remove_post_type_support( 'page', 'editor' );
	}
}
add_action( 'admin_init', 'my_remove_post_type_support');

function add_custom_meta_instalaciones(){
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
	$slug = basename( get_the_permalink( $post_id ) );
	if ( 'instalaciones' == $slug ) {
		add_meta_box( 'meta_instalaciones', 'Hover instalaciones', 'meta_box_instalaciones', 'page', 'normal', 'high' );
	}
}
add_action( 'add_meta_boxes', 'add_custom_meta_instalaciones' );

function meta_box_instalaciones(){ 
	global $post;
	echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'" />';
	get_template_part( 'dashboard/template/template', 'instalaciones' );
}

function meta_box_save_instalaciones( $post_id, $post ){
	if(!wp_verify_nonce($_POST['meta_noncename'], plugin_basename(__FILE__))){
			return $post->ID;
	}
	if(!current_user_can('edit_post', $post->ID))
		return $post->ID;
	$type=$_POST['post_type'];  
	$meta = array();
	switch($type){
		case 'page':
			$meta['tajin'] 	 = $_POST['tajin'];
			$meta['locales'] = $_POST['locales'];
			$meta['ulua'] 	 = $_POST['ulua'];
			$meta['comun'] 	 = $_POST['comun'];

		break;
	}
    
    /*save only it's home */
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
	$slug = basename( get_the_permalink( $post_id ) );
	if ( 'instalaciones' == $slug ) {
        foreach($meta as $key => $value){
            if(is_array($meta) || is_object($meta)){
                if(get_post_meta($post->ID, $key, FALSE)){
                    update_post_meta($post->ID, $key, $value);
                }else{ 
                    add_post_meta($post->ID, $key, $value);
                }
                if(!$value) delete_post_meta($post->ID, $key);
            }
        }
    }
} 
add_action('save_post', 'meta_box_save_instalaciones',1,2);

/*******************************
 * Add custom-meta - Conoce veracruz *
 *******************************/
function my_remove_post_type_conoce_veracruz() {
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
	$slug = basename( get_the_permalink( $post_id ) );
	if ( 'conoce-veracruz' == $slug ) {
    	remove_post_type_support( 'page', 'editor' );
	}
}
add_action( 'admin_init', 'my_remove_post_type_conoce_veracruz');

function add_custom_meta_conoce_veracruz(){
	$post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
	$slug = basename( get_the_permalink( $post_id ) );
	if ( 'conoce-veracruz' == $slug ) {
		add_meta_box( 'meta_instalaciones', 'direccionamiento de botones', 'meta_box_conoce_veracruz', 'page', 'normal', 'high' );
	}
}
add_action( 'add_meta_boxes', 'add_custom_meta_conoce_veracruz' );

function meta_box_conoce_veracruz(){ 
	global $post;
	echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'" />';
	get_template_part( 'dashboard/template/template', 'conoce-veracruz' );
}

function meta_box_save_conoce_veracruz( $post_id, $post ){
	if(!wp_verify_nonce($_POST['meta_noncename'], plugin_basename(__FILE__))){
			return $post->ID;
	}
	if(!current_user_can('edit_post', $post->ID))
		return $post->ID;
	$type=$_POST['post_type'];  
	$meta = array();
	switch($type){
		case 'page':
			$meta['hoteles']   = $_POST['hoteles'];
			$meta['quehacer'] = $_POST['quehacer'];
		break;
	}
    
    /*save only it's home */
    $post_id = $_GET['post'] ? $_GET['post'] : $_POST['post_ID'] ;
    if( !isset( $post_id ) ) return;
	$slug = basename( get_the_permalink( $post_id ) );
	if ( 'conoce-veracruz' == $slug ) {
        foreach($meta as $key => $value){
            if(is_array($meta) || is_object($meta)){
                if(get_post_meta($post->ID, $key, FALSE)){
                    update_post_meta($post->ID, $key, $value);
                }else{ 
                    add_post_meta($post->ID, $key, $value);
                }
                if(!$value) delete_post_meta($post->ID, $key);
            }
        }
    }
} 
add_action('save_post', 'meta_box_save_conoce_veracruz',1,2);
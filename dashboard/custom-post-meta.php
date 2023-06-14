<?php

/**********************************************
 * Add custom-meta - nuevo plan de vacunación *
 **********************************************/

function add_custom_meta_beginning_date(){
	add_meta_box( 'meta_beginning_date', 'Fecha del evento', 'meta_box_beginning_date','eventos-wtcv', 'normal', 'high' );
	add_meta_box( 'meta_beginning_place', 'Descripción del evento', 'meta_box_beginning_place','eventos-wtcv', 'normal', 'high' );
}
add_action( 'add_meta_boxes', 'add_custom_meta_beginning_date' );

function meta_box_beginning_date(){ 
	global $post;
	echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'" />';
	get_template_part( 'dashboard/template/nuevo', 'plan-vacunacion' );
}

function meta_box_beginning_place(){ 
	global $post;
	echo '<input type="hidden" name="meta_noncename" id="meta_noncename" value="'.wp_create_nonce(plugin_basename(__FILE__)).'" />';
	get_template_part( 'dashboard/template/lugar', 'plan-vacunacion' );
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
		case 'plan-vacunacion-2023':
			$meta['dateStart'] 	= $_POST['dateStart'];
			$meta['dateEnd'] 	= $_POST['dateEnd'];
			$meta['hourStart'] 	= $_POST['hourStart'];
			$meta['hourEnd'] 	= $_POST['hourEnd'];
			$meta['municipio'] 	= $_POST['municipio'];
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
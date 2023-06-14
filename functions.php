<?php 
$themename = "wtc-veracruz-2023";
/************************************************/
/* Requires file externals                      */
/************************************************/
require_once( get_stylesheet_directory().'/theme-options/theme-options.php' );

/************************************************/
/* custom-meta                                  */
/************************************************/
require_once(get_stylesheet_directory().'/dashboard/custom-post-meta.php');

/************************************************/
/* Functions script and style                   */
/************************************************/
function get_theme_scripts(){
    global $post;
    wp_register_script('script-jquery', get_template_directory_uri().'/js/jquery-3.1.0.min.js', array(), '3.1.0' );
    wp_enqueue_script( 'script-jquery');

    wp_enqueue_script( 'script-bootstrap', get_template_directory_uri().'/js/bootstrap.min.js', array( 'script-jquery' ), '4.6.0');

    wp_enqueue_script( 'script-cycle', get_template_directory_uri().'/js/jquery.cycle2.min.js', array( 'script-jquery' ), '2.1.6');

    wp_enqueue_script( 'script-validate', get_template_directory_uri().'/js/jquery.validate.js', array( 'script-jquery' ), '2.3.4');

    wp_enqueue_script( 'script-custom', get_template_directory_uri().'/js/functions.js', array( 'script-jquery' ), '1.0');
    $translation_array = array(
        'templateUrl' => admin_url('admin-ajax.php')
    );
    wp_localize_script( 'script-custom', 'wpurl_ajax', $translation_array );

    wp_enqueue_script( 'script-sidr', get_template_directory_uri().'/js/jquery.sidr.min.js', array( 'script-jquery' ), '2.2.1', true);

}
add_action( 'wp_enqueue_scripts', 'get_theme_scripts' );

//Load styles
function get_theme_styles() {
    wp_enqueue_style( 'style-main', get_stylesheet_uri());
    wp_enqueue_style( 'style-bootstrap', get_template_directory_uri().'/css/bootstrap.min.css', array(), '4.6.0');
    wp_enqueue_style( 'style-sidr', get_template_directory_uri().'/css/jquery.sidr.dark.min.css');
}
add_action( 'wp_enqueue_scripts', 'get_theme_styles' );


// Menu principal - Main menu
register_nav_menus( array(
	'principal'   => __( 'Menu principal', $themename ),
) );

add_post_type_support( 'page', 'excerpt' );

// Habilita las imagenes destacadas
add_theme_support( 'post-thumbnails' );

/*add image size crop*/
add_image_size( 'img-slider', 1776, 850, true );
add_image_size( 'img-single', 600, 600, true );
add_image_size( 'img-default', 693, 466, true );

add_theme_support( 'html5', array(
	'search-form'
) );

function my_login_logo() {
	$branding = get_option("themeoption_branding");
    wp_enqueue_script( 'login-script', get_template_directory_uri(). '/js/login.script.js',array( 'jquery' ), null, true);
?>
    <style type="text/css">
        body.login div#login h1 a {
            background-image: url(<?php echo $branding['logo-principal']; ?>);
            background-size: contain;
            padding-bottom: 5px;
			width: 100%;
        }
    </style>
<?php }
add_action( 'login_enqueue_scripts', 'my_login_logo' );

function change_footer_admin() {
    echo $themename;
}
add_filter('admin_footer_text', 'change_footer_admin');

function remove_thumbnails($sizes){
    unset( $sizes['large']);
    unset( $sizes['medium']);
    unset( $sizes['thumbnail']);
    return $sizes;
}
add_filter('intermediate_image_sizes_advanced', 'remove_thumbnails' );

//-----Función para limitar caracteres-----//
function cutString($string,$charlength,$key) {
    switch($string){
        case 'title':
            $string=wpautop(get_the_title(), 1 );
        break;
        case 'excerpt':
            $string=get_the_excerpt();
        break;
        case 'content':
            $string=wpautop(get_the_content(), 1 );
        break;
        case 'meta':
            $string=wpautop(get_option(''.$key.''), 1 );
        break;
        case 'var':
            $string= esc_html($key, $themename);
        break;
    }
    if(strlen($string)>$charlength) {
        $subex=substr($string,0,$charlength);
        echo $subex.'...';
    }else{
        echo $string;
    }
}

function get_img_feed($id){
	$post_thumbnail = wp_get_attachment_image_src(get_post_thumbnail_id($id), 'slider-img');
	if($post_thumbnail){
		$post_thumbnail = $post_thumbnail[0];
	}else{
		$post_thumbnail = get_post_meta($id, 'image_proporcional', true);
	}
	return $post_thumbnail;
}

function inputTelephoneFormat($num){
     $newNum = str_replace(' ', '-', $num);

    return $newNum;
}

/************************************************/
/* Formulario de contacto para todos los sitios */
/************************************************/
function sendmail(){
    $data_array = $_POST;
    $configuration_theme = get_option("themeoption_configuration_general");
    $branding = get_option("themeoption_branding");
    
    if( !empty($data_array['config']['email_cc']) && isset($data_array['config']['email_cc'])){
        $email_cc = $data_array['config']['email_cc'];
    }else{
        $email_cc = $configuration_theme['e-mail'];    
    }
    
    $template = $data_array['config']['template_name'];
    $subject = $data_array['config']['subject'];
    $fromname = "Recibio un nuevo mensaje de ...";
    
    unset($data_array['config']);
    $formvars = $data_array;
    
    $formvars['logo-principal'] = $branding['logo-principal'];
    
    require get_template_directory().'/lib/phpmailer/PHPMailerAutoload.php';

    $mailer = new PHPMailer();

    $mailer->AddAddress(''.$email_cc.'');
    $mailer->Subject = $subject;
    $mailer->From = "no-responder@mail.com";
    $mailer->FromName = $fromname;

    //build dinamic html
    $html = "";
    foreach ($formvars as $key => $value) {
        if( $key != 'permalink' && $key != 'action' && $key != 'logo-principal'){
            $html .= "<p>";
                $html .= "<strong>". $key .": </strong>  ".$value;
            $html .= "</p>";
        }
    }
    $formvars['html'] = $html;

    //load template
    $body = file_get_contents(get_stylesheet_directory_uri().'/template-newsletter/'.$template.'.html');

    foreach ($formvars as $key => $value) {
        if(isset($formvars[$key]) && !empty($formvars[$key])){
            $body = str_replace('{' . $key . '}', $value, $body);
        }else{
            $body = str_replace('{' . $key . '}', '-----' , $body);
        }
    }
    $mailer->CharSet = 'utf-8';
    $mailer->MsgHTML($body);
    $mailer->IsHTML(true);

    if($mailer->Send()){
        $result = array(
            "estatus" => "success",
            "mensaje" => "Gracias por contactarnos, nosotros nos pondremos en contacto contigo"
        );
    }else{
        $error = "Mailer Error: " . $mailer->ErrorInfo; // for testing
        $result = array(
            "estatus" => "danger",
            "mensaje" => "Hubo un problema intentelo más tarde.",
            "code_error" => $error
        );
    }
    
    echo json_encode($result);
    die();
}
add_action('wp_ajax_sendmail', 'sendmail');
add_action('wp_ajax_nopriv_sendmail', 'sendmail');


function obtenerNombreMes($numeroMes) {
    $meses = array(
        1 => 'Enero',
        2 => 'Febrero',
        3 => 'Marzo',
        4 => 'Abril',
        5 => 'Mayo',
        6 => 'Junio',
        7 => 'Julio',
        8 => 'Agosto',
        9 => 'Septiembre',
        10 => 'Octubre',
        11 => 'Noviembre',
        12 => 'Diciembre'
    );

    // Verificar si el número de mes está dentro del rango válido
    if (isset($meses[$numeroMes])) {
        return $meses[$numeroMes];
    } else {
        return 'Mes inválido';
    }
}

/*************************************/
/*             Eventos               */
/*************************************/

function init_custom_type_eventos(){
    $labels = array(
        'name' => 'Nuevo Evento',
        'singular_name' => 'Evento',
        'add_new' => 'Agregar Evento',
        'add_new_item' => 'Agregar Evento',
        'edit_item' => 'Editar Evento',
        'new_item' => 'Nueva Evento',
        'view_item' => 'Ver Evento',
        'search_items' => 'Buscar Evento',
        'not_found' =>  'No se encontraron Evento',
        'not_found_in_trash' => 'No hay Evento en la papelera',
        'parent_item_colon' => ''
    );
    $args = array(
        'labels' => $labels,
        'public' => true,
        'publicly_queryable' => true,
        'show_ui' => true,
        'query_var' => true,
        'rewrite' => true,
        'capability_type' => 'post',
        'hierarchical' => true,
        'menu_position' => null,
        'menu_icon' => 'dashicons-tickets-alt',
        'menu_icon_background' => '#000000',
        // 'supports' => array('title', 'editor'),
        'supports' => array('title'),
        'has_archive' =>true
    );
    
    register_post_type('eventos-wtcv',$args);
}
add_action('init', 'init_custom_type_eventos');

/* search manuals and IPL's
============================================= */
function get_search_ajax2(){
    wp_reset_query();
    $search_param = $_POST['s'];
    $args = array(
        'post_type' => 'eventos-wtcv',
        'post_status' => array('publish'),
        'orderby' => 'date',
        'order'   => 'ASC',
        's' => $search_param,
        'posts_per_page' => -1
    );

    $cont = 0;
    $query = new WP_Query($args);
    if ( $query->have_posts() ){
        while ($query->have_posts()){
            $query->the_post();
            $data_array[$cont]['title'] = get_the_title();
            $data_array[$cont]['eventos-wtcv'] = get_post_meta($query->post->ID, 'eventos-wtcv', true);
            // $data_array[$cont]['titulo_plan'] = get_post_meta($query->post->ID, 'titulo-plan', true);

            $cont++;
        }
    }
    echo json_encode($data_array);
    wp_reset_query();
    die();
}
add_action('wp_ajax_get_search_ajax', 'get_search_ajax2');
add_action('wp_ajax_nopriv_get_search_ajax', 'get_search_ajax2');

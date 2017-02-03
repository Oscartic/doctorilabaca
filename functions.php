<?php //Functions.php - http://www.doctorilabaca.cl
//Función registro de menus
register_nav_menus ( array(
'menu' => 'Menu header',
));
//Función registro de plugin en sidebar
function miplugin_reg_sidebar (){
	register_sidebar(
		array(
			'id' => 'sidebar_rigth',
			'name' => 'Widget Columna Derecha',
			'description' => 'Opción para agregar plugins al final del sidebar,',
			'before_widget' => '<div class="plugin">',
			'after_widget' => '</div>'		
		)
	);
}
add_action('widgets_init','miplugin_reg_sidebar');
//Función leer más
function cambiar_final_extracto(){

return '<a title="Continuar Leyendo" href="'.get_permalink().'" rel="nofollow"> + Continuar Leyendo</a>';

}
add_filter('excerpt_more','cambiar_final_extracto');
//Función largo extracto
function largo_extracto($length){
	return 30;
}
add_filter('excerpt_length','largo_extracto');
//Función Logo en wp-admin
function custom_login() {
echo '<link rel="stylesheet" type="text/css" href="'.get_bloginfo('template_url').'/custom-login.css" />';
}
add_action('login_head', 'custom_login');
//Función Redireccionamiento del enlace logo en wp-admin al home de la página
function the_url( $url ) {
    return get_bloginfo( 'url' );
}
add_filter( 'login_headerurl', 'the_url' );
// Función thumbails para Slider
add_theme_support('post-thumbnails');
add_image_size('slider_thumbs', 940, 390, true);

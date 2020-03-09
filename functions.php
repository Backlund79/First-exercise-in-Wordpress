<?php

add_theme_support( 'post-thumbnails' ); //tillåter temat att lägga till bilder i posts.

add_image_size('smallest', 300, 300, true); //stolek för bilder på posts första variablen är bara ett namn sedan bredden och hjöden följt av om wordpress skall croppa bilden eller inte. 
add_image_size('largest', 800, 800, true); 
add_image_size('normal', true); 

add_theme_support('menus'); //tillåter temat att skapa menyer

register_nav_menus(  

    array(
        'top-menu' => __('Top Menu', 'theme'),
        'side_menu' => __('Side Menu', 'theme'),
    )
);   //denna funktion tillåter oss att possitionera ut menyn som vi skapar i wordpress


function load_stylesheets(){

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), false, 'all');
    wp_enqueue_style('bootstrap');

    wp_register_style('font_awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), false, 'all');
    wp_enqueue_style('font_awesome');

    wp_register_style('style', get_template_directory_uri() . '/css/style.css', array(), false, 'all');
    wp_enqueue_style('style');
}
add_action('wp_enqueue_scripts', 'load_stylesheets'); // Funktion för att ladda in styles utan att behöva lägga till dom i heder utan registrerar dom i wordpress och är aktiva för alla sidor. 


function include_jquery(){

    wp_deregister_script('jquery');

    wp_enqueue_script('jquery', get_template_directory_uri() . '/js/jquery.js', array(), 1, 1, 1);

    add_action('wp_enqueue_scripts', 'jquery');
}
add_action('wp_enqueue_scripts', 'include_jquery'); //funktion för att ladda in jquery samt avregistrea om någon annan version redan finns inlaggd sista siffran i wp_enqueue bestämmer om skriptet skall laddas i foooter eller inte 1 = footer


function loadJs(){

    wp_register_script('customjs', get_template_directory_uri() . '/js/script.js', array(), 1, 1, 1);
    wp_enqueue_script('customjs');

}
add_action('wp_enqueue_scripts', 'loadJs'); //Funktion för att ladda in Javascript på samtliga sidor sista siffran i wp_register bestämmer om skriptet skall laddas i foooter eller inte 1 = footer


//funktion för att registrera ACF i wordpress
function register_acf_options_pages() {

    // kontrollerar om funktionen finns
    if( !function_exists('acf_add_options_page') )
        return;

    // registrerar inställnings sidan för ACF samt döper menyn inne i admin panelen
    $option_page = acf_add_options_page(array(
        'page_title'    => __('Tema Generella Inställningar'),
        'menu_title'    => __('Tema Inställningar'),
    ));
}

// kör funktionen som registrerar ACF
add_action('acf/init', 'register_acf_options_pages');

/**
 * Registrerar sidebar så vi kan använda den var vi vill i vårt tema. 
 *
 */
function blogg_sidebar() {

	register_sidebar( array(
		'name'          => 'Blogg Sidebar',
		'id'            => 'blogg_sidebar',
		'before_widget' => '<ul><li>',
		'after_widget'  => '</li></ul>',
		'before_title'  => '<h2>',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'blogg_sidebar' ); //kör funktionen som registrerar sidebar till vårt tema

// Funktion för att skapa pagnation på våra sidor där vi anropar den 
function pagination(){
    echo '<ul>';
    if ( get_previous_posts_link() ) {
    echo '<li>'; previous_posts_link("Nyare inlägg"); echo '</li>';
    }
    if ( get_next_posts_link() ) {
    echo '<li>'; next_posts_link("Äldre inlägg"); echo '</li>';
    }
    echo '</ul>';
   }


?>

<?php

/*** LOGIN PAGE **/
function admin_styles() {
    wp_enqueue_style('vegasCSS', get_template_directory_uri() . '/login/css/vegas.min.css', false );
    wp_enqueue_style('loginCSS', get_template_directory_uri() . '/login/css/login.css', false );
    
    wp_enqueue_script('jquery');
    wp_enqueue_script('vegasjs', get_template_directory_uri() . '/login/js/vegas.min.js', array('jquery'), '1.0.0', true );
    wp_enqueue_script('loginjs', get_template_directory_uri() . '/login/js/login.js', array('jquery'), '1.0.0', true );

    wp_localize_script(
        'loginjs',
        'login_images',
        array(
            "theme_path" => get_template_directory_uri() . '/login/img/'
        )
    );

}
add_action('login_enqueue_scripts', 'admin_styles', 10 );




function torontoOnline_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri() );
    wp_enqueue_style('bxslidercss', get_stylesheet_directory_uri(). '/css/jquery.bxslider.css');

    wp_enqueue_script('jquery');
    wp_enqueue_script('bxsliderjs', get_stylesheet_directory_uri() . '/js/jquery.bxslider.min.js', array('jquery'), '4.2',  true);
    wp_enqueue_script('scripts', get_stylesheet_directory_uri() . '/js/scripts.js', array('jquery'), '1.0',  true);
}

add_action('wp_enqueue_scripts', 'torontoOnline_scripts' );

/** NAVIGATION **/
register_nav_menus(array(
    'main_menu' =>__('Main Menu', 'torontoOnline')
));

/** WIDGET ZONE **/
function theme_widgets(){
    register_sidebar(array(
        'name'         => __('Sidebar Testimonials'),
        'id'           => 'testimonials',
        'description'  => 'Testimonials Widgets',
        'before_widget' => '<side id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   =>'</h3>',  
    ) );
    register_sidebar(array(
        'name'         => __('Image for the Font Page'),
        'id'           => 'font-page',
        'description'  => 'Widget For the font page',
        'before_widget' => '<div id="%1$s" class="widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   =>'</h3>',  
    ) );
}

add_action('widgets_init', 'theme_widgets');

/** Add Featured Image **/

add_theme_support('post-thumbnails');

add_image_size('featured', 1100, 418, true);
add_image_size('medium-blog', 358, 208, true);


add_filter('show_admin_bar', '__return_false');
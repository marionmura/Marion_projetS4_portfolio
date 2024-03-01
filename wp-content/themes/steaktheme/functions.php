<?php add_theme_support( 'post-thumbnails' ); ?>

<?php 
    //ajouter une nouvelle zone de menu à mon thème
    function register_my_menu(){
        register_nav_menus( array(
            'header-menu' => __( 'Menu header'),
            'footer-menu'  => __( 'Menu footer'),
        ) );
    }
   
    function enqueue_tailwind_css() {
        // Trouve le fichier tailwind.css dans le dossier du thème
        wp_enqueue_style( 'style', get_stylesheet_uri() );
        wp_enqueue_style( 'input', get_template_directory_uri() . '/input.css', array('style'), '1.0' );
    }
    
    add_action('wp_enqueue_scripts', 'enqueue_tailwind_css');
    


add_action( 'init', 'register_my_menu', 0 );
?>


<?php
    require get_template_directory() . '/wp-bootstrap-navwalker.php';


    function yourtheme_enqueue_scripts() {
        wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css' );
    }
    add_action( 'wp_enqueue_scripts', 'yourtheme_enqueue_scripts' );

    function limogesFc_setup(){



        add_action( 'wp_enqueue_scripts', 'theme_scripts');
        function theme_scripts(){
            global $wp_scripts;
            //wp_enqueue_script( 'bootstrap', get_stylesheet_directory_uri() . '/librairie/bootstrap/dist/js/bootstrap.min.js', array( 'jquery' ), null, true );
            //wp_enqueue_script( 'jquery', get_stylesheet_directory_uri() . '/librairie/jquery/jquery.min.js', null, true );
            wp_enqueue_script( 'js', get_stylesheet_directory_uri() . '/js/script.js');

        }

        add_action( 'wp_enqueue_scripts', 'theme_styles');
        function theme_styles(){

            //wp_enqueue_style( 'fontawesome', get_stylesheet_directory_uri() . '/librairie/fontawesome/web-fonts-with-css/css/fontawesome-all.min.css' );
            //wp_enqueue_style( 'bootstrap', get_stylesheet_directory_uri() . '/librairie/bootstrap/dist/css/bootstrap.min.css' );
            wp_enqueue_style( 'style', get_stylesheet_directory_uri() . '/style.css' );
        }

        /*support de vignettes*/
        add_theme_support( 'post-thumbnails' );

        /*enlève le générateur de version*/
        remove_action('wp_head', 'wp_generator');

        /*support du titre*/
        add_theme_support('title-tag');

        /*gestion du menu*/
        add_action( 'admin_menu', 'wpd_admin_menu_item' );
        function wpd_admin_menu_item(){
            add_submenu_page(
                'edit.php',
                'Page title',
                'Menu item title',
                'edit_posts',
                'edit.php?category_name=somecat'
            );
        }

        register_nav_menus( array(
            'Top' => 'Navigation principale',
        ) );

        /*Permet de modifier l'arrière plan de l'article*/
        $defaults = array(
            'default-color'          => '',
            'default-image'          => '',
            'default-repeat'         => '',
            'default-position-x'     => '',
            'default-attachment'     => '',
            'wp-head-callback'       => '_custom_background_cb',
            'admin-head-callback'    => '',
            'admin-preview-callback' => ''
        );
        add_theme_support( 'custom-background', $defaults );
        /*********************************************************/
        /*D2finir le nombre de mots dans l'extrait de l'article*/
        function new_excerpt_length($length) {
            return 20;
        }
        add_filter('excerpt_length', 'new_excerpt_length');
        /*********************************************************/
        /*Permet de rajouter le lien lire la suite dans l'extrait de l'article*/
        function excerpt_read_more_link($output) {
            global $post;
            return $output . '<a href="'. get_permalink($post->ID) . '"> Lire la suite...</a>';
        }
        add_filter('the_excerpt', 'excerpt_read_more_link');
        /**************************************************************/

        add_action( 'loop_start', 'shortcode_before_entry' );

        /*fonction qui permet de recuperer le titre de la page **********/

    }
    add_action('after_setup_theme', 'limogesFc_setup');












 ?>

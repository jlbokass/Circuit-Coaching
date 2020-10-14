<?php
add_action( 'wp_enqueue_scripts', 'child_enqueue_styles',99);
function child_enqueue_styles() {
    $parent_style = 'parent-style';
    wp_enqueue_style( $parent_style, get_template_directory_uri() . '/style.css' );
    wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( $parent_style ) );
    wp_enqueue_style( 'google-fonts', '//fonts.googleapis.com/css2?family=Montserrat:wght@400;600;700&display=swap' );
}
if ( get_stylesheet() !== get_template() ) {
    add_filter( 'pre_update_option_theme_mods_' . get_stylesheet(), function ( $value, $old_value ) {
        update_option( 'theme_mods_' . get_template(), $value );
        return $old_value; // prevent update to child theme mods
    }, 10, 2 );
    add_filter( 'pre_option_theme_mods_' . get_stylesheet(), function ( $default ) {
        return get_option( 'theme_mods_' . get_template(), $default );
    } );
}

// Hooks
add_filter( 'upload_mimes', 'capitaine_mime_types' );
add_filter( 'wp_check_filetype_and_ext', 'capitaine_file_types', 10, 4 );

// Autoriser l'import des fichiers SVG et WEBP
function capitaine_mime_types( $mimes ){
    $mimes['svg'] = 'image/svg+xml';
    $mimes['webp'] = 'image/webp';
    return $mimes;
}

// Contrôle de l'import d'un WEBP
function capitaine_file_types( $types, $file, $filename, $mimes ) {
    if ( false !== strpos( $filename, '.webp' ) ) {
        $types['ext'] = 'webp';
        $types['type'] = 'image/webp';
    }
    return $types;
}

add_theme_support( 'yoast-seo-breadcrumbs' );

// Single post
add_action( 'hestia_before_single_post_wrap', 'hestia_child_add_yoast_seo_breadcrumbs', 100 );

// Single page
add_action( 'hestia_before_page_content', 'hestia_child_add_yoast_seo_breadcrumbs', 100 );

// Index
add_action( 'hestia_index_page_before_content', 'hestia_child_add_yoast_seo_breadcrumbs', 100 );

function hestia_child_add_yoast_seo_breadcrumbs() {
    if ( function_exists( 'yoast_breadcrumb' ) ) {
        yoast_breadcrumb( '<p id="breadcrumbs">', '</p>' );
    }
}
<?php
// REGISTRA OS MENUS
register_nav_menus(array(
    'main_menu' => 'Main Menu',
));

// THUMBNAILS
add_theme_support('post-thumbnails');
// add_image_size( 'thumb', 240, 99999 ); 
add_image_size('thumb', 600, 450, array('center', 'center'));

function mytheme_custom_excerpt_length($length)
{
    return 20;
}
add_filter('excerpt_length', 'mytheme_custom_excerpt_length', 999);


function flooring_taxonomy()
{
    register_taxonomy(
        'product-category',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'products',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Product Type', // display name
            'query_var' => true,
        )
    );
    register_taxonomy(
        'product-look',  // The name of the taxonomy. Name should be in slug form (must not contain capital letters or spaces).
        'products',             // post type name
        array(
            'hierarchical' => true,
            'label' => 'Product Look', // display name
            'query_var' => true,
        )
    );
}
add_action('init', 'flooring_taxonomy');

function create_post_type()
{
    register_post_type(
        'promotions',
        array(
            'labels' => array(
                'name' => __('Promotions'),
                'singular_name' => __('Promotion')
            ),
            'public' => true,
            'has_archive' => false,
            'menu_icon'   => 'dashicons-tag',
            'menu_position' => 5,
            'supports' => array('title', 'thumbnail',)
        )
    );
    register_post_type(
        'products',
        array(
            'labels' => array(
                'name' => __('Products'),
                'singular_name' => __('Product')
            ),
            'public' => true,
            'has_archive' => true,
            'menu_icon'   => 'dashicons-cart',
            'menu_position' => 5,
            'taxonomies'  => array('product-category'),
            'rewrite'     => array('slug' => 'flooring/all'),
            'supports' => array('title', 'thumbnail', 'editor')
        )
    );
}
add_action('init', 'create_post_type');

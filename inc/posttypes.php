<?php

register_post_type( 'our_services',
    // CPT Options
    array(
        'labels' => array(
            'name' => __( 'Our Services' ),
            'singular_name' => __( 'Our Service' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'our_services'),
        'supports' => array('title', 'editor', 'thumbnail'),
        'show_in_rest' => true,
    )
);

register_post_type( 'our_clients',
    // CPT Options
    array(
        'labels' => array(
            'name' => __( 'Our Clients' ),
            'singular_name' => __( 'Our Client' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'our_clients'),
        'supports' => array('thumbnail'),
        'show_in_rest' => true,
    )
);

register_post_type( 'our_work',
    // CPT Options
    array(
        'labels' => array(
            'name' => __( 'Our Work' ),
            'singular_name' => __( 'Our Work' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'our_work'),
        'supports' => array('thumbnail'),
        'show_in_rest' => true,
    )
);

register_post_type( 'our_locations',
    // CPT Options
    array(
        'labels' => array(
            'name' => __( 'Our Locations' ),
            'singular_name' => __( 'Our Location' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'our_locations'),
        'supports' => array('title', 'editor'),
        'show_in_rest' => true,
    )
);

register_post_type( 'testimonials',
    // CPT Options
    array(
        'labels' => array(
            'name' => __( 'Testimonials' ),
            'singular_name' => __( 'Testimonial' )
        ),
        'public' => true,
        'has_archive' => true,
        'rewrite' => array('slug' => 'testimonials'),
        'supports' => array('editor', 'thumbnail', 'custom-fields'),
        'show_in_rest' => true,
    )
);
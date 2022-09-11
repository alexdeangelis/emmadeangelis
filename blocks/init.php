<?php

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {

        // register a hero block.
        acf_register_block_type(array(
            'name'              => 'hero',
            'title'             => __('Hero'),
            'description'       => __('A custom hero block.'),
            'render_template'   => 'blocks/render/hero.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hero', 'quote' ),
        ));

        // register a text complex block.
        acf_register_block_type(array(
            'name'              => 'text-complex',
            'title'             => __('Text Complex'),
            'description'       => __('A custom text complex block.'),
            'render_template'   => 'blocks/render/text-complex.php',
            'category'          => 'formatting',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'text-complex', 'quote' ),
        ));
    }
}
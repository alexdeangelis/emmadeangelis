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
            'category'          => 'emmas-rows',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'hero', 'quote' ),
        ));

        // register a text complex block.
        acf_register_block_type(array(
            'name'              => 'text-complex',
            'title'             => __('Text Complex'),
            'description'       => __('A custom text complex block.'),
            'render_template'   => 'blocks/render/text-complex.php',
            'category'          => 'emmas-rows',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'text-complex', 'quote' ),
        ));

        // register a icon columns block.
        acf_register_block_type(array(
            'name'              => 'icon-columns',
            'title'             => __('Icon Columns'),
            'description'       => __('A custom icon columns block.'),
            'render_template'   => 'blocks/render/icon-columns.php',
            'category'          => 'emmas-rows',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'icon-columns', 'quote' ),
        ));

        // register a form block.
        acf_register_block_type(array(
            'name'              => 'form',
            'title'             => __('Form'),
            'description'       => __('A custom form block.'),
            'render_template'   => 'blocks/render/form.php',
            'category'          => 'emmas-rows',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'form', 'quote' ),
        ));

        // register a articles block.
        acf_register_block_type(array(
            'name'              => 'articles',
            'title'             => __('Articles'),
            'description'       => __('A custom articles block.'),
            'render_template'   => 'blocks/render/articles.php',
            'category'          => 'emmas-rows',
            'icon'              => 'admin-comments',
            'keywords'          => array( 'articles', 'quote' ),
        ));
    }
}
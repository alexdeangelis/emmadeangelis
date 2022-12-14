<?php

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_631df734a9446',
        'title' => 'Row - Form',
        'fields' => array(
            array(
                'key' => 'field_631df734b9424',
                'label' => 'Introduction Fields',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_631df734b9436',
                'label' => 'Heading',
                'name' => 'intro_heading',
                'type' => 'text',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_631df734b9441',
                'label' => 'Text',
                'name' => 'intro_text',
                'type' => 'textarea',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'maxlength' => '',
                'rows' => '',
                'placeholder' => '',
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_631df734b944e',
                'label' => 'Alignment',
                'name' => 'intro_alignment',
                'type' => 'select',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'choices' => array(
                    'center' => 'Centre',
                    'left' => 'Left',
                    'right' => 'Right',
                ),
                'default_value' => 'centre',
                'return_format' => 'value',
                'multiple' => 0,
                'allow_null' => 0,
                'ui' => 0,
                'ajax' => 0,
                'placeholder' => '',
            ),
            array(
                'key' => 'field_631df734b945a',
                'label' => 'Introduction Fields End',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 1,
            ),
            array(
                'key' => 'field_631df734b9467',
                'label' => 'Form Fields',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_631df734b94ad',
                'label' => 'Form ID',
                'name' => 'form_id',
                'type' => 'number',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'min' => '',
                'max' => '',
                'placeholder' => '',
                'step' => '',
                'prepend' => '',
                'append' => '',
            ),
            array(
                'key' => 'field_631df734b94da',
                'label' => 'Form Fields End',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 1,
            ),
            array(
                'key' => 'field_631df734b94e9',
                'label' => 'Colour Fields',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 0,
            ),
            array(
                'key' => 'field_631df734b94f5',
                'label' => 'Background Colour',
                'name' => 'background_colour',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'enable_opacity' => 0,
                'return_format' => 'string',
            ),
            array(
                'key' => 'field_631df734b9501',
                'label' => 'Text Colour',
                'name' => 'text_colour',
                'type' => 'color_picker',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'enable_opacity' => 0,
                'return_format' => 'string',
            ),
            array(
                'key' => 'field_631df734b950c',
                'label' => 'Colour Fields End',
                'name' => '',
                'type' => 'accordion',
                'instructions' => '',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'open' => 0,
                'multi_expand' => 0,
                'endpoint' => 1,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'block',
                    'operator' => '==',
                    'value' => 'acf/form',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'normal',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
        'show_in_rest' => 0,
    ));
    
    endif;		
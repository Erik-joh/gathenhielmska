<?php

declare(strict_types=1);

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e8dce29d6595',
        'title' => 'room_info',
        'fields' => array(
            array(
                'key' => 'field_5e8dce3545434',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => 'The title of the room.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Trädgården',
                'prepend' => '',
                'append' => '',
                'maxlength' => 50,
            ),
            array(
                'key' => 'field_5e8dcea845435',
                'label' => 'Description',
                'name' => 'description',
                'type' => 'textarea',
                'instructions' => 'A description of the room.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Perfekt för dig som vill hålla i en workshop eller en konsert på en scen.',
                'maxlength' => 120,
                'rows' => 3,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5e8dcf3c45436',
                'label' => 'Capacity',
                'name' => 'capacity',
                'type' => 'text',
                'instructions' => 'The capacity of the room.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Plats för 10-20 personer.',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => 50,
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'room',
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
    ));

    endif;

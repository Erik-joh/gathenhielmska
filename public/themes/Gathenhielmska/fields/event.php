<?php

declare(strict_types=1);

if( function_exists('acf_add_local_field_group') ):

    acf_add_local_field_group(array(
        'key' => 'group_5e86f29725d32',
        'title' => 'event_info',
        'fields' => array(
            array(
                'key' => 'field_5e981087a4ef1',
                'label' => 'Hero image',
                'name' => 'hero_image',
                'type' => 'image',
                'instructions' => 'Upload a hero image',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'return_format' => 'url',
                'preview_size' => 'large',
                'library' => 'all',
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5e86f2b19dcfb',
                'label' => 'Short description',
                'name' => 'short_description',
                'type' => 'textarea',
                'instructions' => 'A short description of the event.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => 100,
                'rows' => 4,
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5e8ee0c6f8c7d',
                'label' => 'Title 1',
                'name' => 'title_1',
                'type' => 'text',
                'instructions' => 'First title',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e8ee0fcf8c7e',
                'label' => 'Text 1',
                'name' => 'text_1',
                'type' => 'textarea',
                'instructions' => 'Description of the event',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5e8ee1d4f8c7f',
                'label' => 'Title 2',
                'name' => 'title_2',
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
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e8ee25bf8c80',
                'label' => 'Text 2',
                'name' => 'text_2',
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
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => '',
            ),
            array(
                'key' => 'field_5e86f3149dcfc',
                'label' => 'Date',
                'name' => 'date',
                'type' => 'date_picker',
                'instructions' => 'The date for the event.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'F j, Y',
                'return_format' => 'Y-m-d',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_5e86f3729dcfd',
                'label' => 'Ending date',
                'name' => 'ending_date',
                'type' => 'date_picker',
                'instructions' => 'If the event lasts for more than one day, please fill in the event ending date.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'F j, Y',
                'return_format' => 'Y-m-d',
                'first_day' => 1,
            ),
            array(
                'key' => 'field_5e86f3bd9dcfe',
                'label' => 'Time Event Start',
                'name' => 'time_event_start',
                'type' => 'time_picker',
                'instructions' => 'The time of the event start.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'H:i',
                'return_format' => 'H:i',
            ),
            array(
                'key' => 'field_5e86f4649dcff',
                'label' => 'Time Event End',
                'name' => 'time_event_end',
                'type' => 'time_picker',
                'instructions' => 'The time of the event ending.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'display_format' => 'H:i',
                'return_format' => 'H:i',
            ),
            array(
                'key' => 'field_5e86f4829dd00',
                'label' => 'Ticket Price',
                'name' => 'ticket_price',
                'type' => 'text',
                'instructions' => 'The ticket price.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => '',
                'placeholder' => 'Fri entré / 50 kr',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e86f5689dd01',
                'label' => 'Location',
                'name' => 'location',
                'type' => 'text',
                'instructions' => 'The location of the event.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Stigbergstorget 7, 414 63 Göteborg',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e8ee37df8c81',
                'label' => 'Optional info',
                'name' => 'optional_info',
                'type' => 'textarea',
                'instructions' => 'Optional information about the event.',
                'required' => 0,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Gathenhielmska huset har en maxgräns på 35 besökare vid evenemang inomhus.

    Kom gärna en stund innan det börjar.

    Klicka på knappen för att säkra din biljett!',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
            ),
            array(
                'key' => 'field_5e95d5c78392d',
                'label' => 'Images',
                'name' => 'images',
                'type' => 'group',
                'instructions' => '',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'layout' => 'row',
                'sub_fields' => array(
                    array(
                        'key' => 'field_5e95d5db8392e',
                        'label' => 'Image 1',
                        'name' => 'image_1',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => 575,
                        'min_height' => 385,
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                    array(
                        'key' => 'field_5e95d6378392f',
                        'label' => 'Image 2',
                        'name' => 'image_2',
                        'type' => 'image',
                        'instructions' => '',
                        'required' => 1,
                        'conditional_logic' => 0,
                        'wrapper' => array(
                            'width' => '',
                            'class' => '',
                            'id' => '',
                        ),
                        'return_format' => 'url',
                        'preview_size' => 'medium',
                        'library' => 'all',
                        'min_width' => 575,
                        'min_height' => 385,
                        'min_size' => '',
                        'max_width' => '',
                        'max_height' => '',
                        'max_size' => '',
                        'mime_types' => '',
                    ),
                ),
            ),
            array(
                'key' => 'field_5e96d5db14f7b',
                'label' => 'Online Event',
                'name' => 'online_event',
                'type' => 'true_false',
                'instructions' => 'Will this event be available online as a livestream?',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'message' => '',
                'default_value' => 0,
                'ui' => 1,
                'ui_on_text' => 'Yes',
                'ui_off_text' => 'No',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'post_type',
                    'operator' => '==',
                    'value' => 'event',
                ),
            ),
        ),
        'menu_order' => 0,
        'position' => 'acf_after_title',
        'style' => 'default',
        'label_placement' => 'top',
        'instruction_placement' => 'label',
        'hide_on_screen' => '',
        'active' => true,
        'description' => '',
    ));

    endif;

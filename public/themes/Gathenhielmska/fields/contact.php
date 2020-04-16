<?php

declare(strict_types=1);

if (function_exists('acf_add_local_field_group')) :

    acf_add_local_field_group(array(
        'key' => 'group_5e8719dd8b6cb',
        'title' => 'contact_page',
        'fields' => array(
            array(
                'key' => 'field_5e98112ihhs873',
                'label' => 'Hero image desktop',
                'name' => 'hero_image_desktop',
                'type' => 'image',
                'instructions' => 'Top image on desktop please pick an image with Aspect ratio 16:6',
                'required' => 0,
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
                'key' => 'field_5e8b20klo3rrfs',
                'label' => 'Hero image mobile',
                'name' => 'hero_image_mobile',
                'type' => 'image',
                'instructions' => 'Top image on mobile please pick an image with Aspect ratio 16:9',
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
                'min_width' => '',
                'min_height' => '',
                'min_size' => '',
                'max_width' => '',
                'max_height' => '',
                'max_size' => '',
                'mime_types' => '',
            ),
            array(
                'key' => 'field_5e8719fe62825',
                'label' => 'Title',
                'name' => 'title',
                'type' => 'text',
                'instructions' => 'Write a title.',
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
                'key' => 'field_5e871a2b62826',
                'label' => 'Text',
                'name' => 'text',
                'type' => 'textarea',
                'instructions' => 'Write a text.',
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
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_5e871a5762827',
                'label' => 'Title 2',
                'name' => 'title_2',
                'type' => 'text',
                'instructions' => 'Write a title.',
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
                'key' => 'field_5e871ab762828',
                'label' => 'Mail',
                'name' => 'mail',
                'type' => 'email',
                'instructions' => 'Write your email.',
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
            ),
            array(
                'key' => 'field_5e8dd45eb4a37',
                'label' => 'Title 3',
                'name' => 'title_3',
                'type' => 'text',
                'instructions' => 'Write a title.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Vill du anordna ett evenemang eller boka en lokal?',
                'placeholder' => '',
                'prepend' => '',
                'append' => '',
                'maxlength' => '',
            ),
            array(
                'key' => 'field_5e8dd48bb4a38',
                'label' => 'Text 3',
                'name' => 'text_3',
                'type' => 'textarea',
                'instructions' => 'Write a text.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'Är du intresserad av att arrangera kreativa möten mellan människor som älskar kultur? Vill du boka en lokal för möten, workshop eller ett evenemang? I Gathenhielmska huset har du möjlighet att låta din kreativitet flöda i någon av dess stora salar eller vackra trädgård.
    Kika in våra lokaler nedan och lämna en intresseanmälan!',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'wpautop',
            ),
            array(
                'key' => 'field_5e9463719d6b6',
                'label' => 'Text 4',
                'name' => 'text_4',
                'type' => 'textarea',
                'instructions' => 'Write a text.',
                'required' => 1,
                'conditional_logic' => 0,
                'wrapper' => array(
                    'width' => '',
                    'class' => '',
                    'id' => '',
                ),
                'default_value' => 'I hyra ingår tillgång till lokal, kök, bord och stolar. Beroende på hyresnivå ingår även hjälp med iordningställande och teknisk utrustning.',
                'placeholder' => '',
                'maxlength' => '',
                'rows' => '',
                'new_lines' => 'br',
            ),
        ),
        'location' => array(
            array(
                array(
                    'param' => 'page_template',
                    'operator' => '==',
                    'value' => 'page-templates/contact.php',
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

<?php

declare(strict_types=1);

if( function_exists('acf_add_local_field_group') ):

acf_add_local_field_group(array(
	'key' => 'group_5e8ef4e1f2c9c',
	'title' => 'gallery_page',
	'fields' => array(
		array(
			'key' => 'field_5e8ef4e9f6cab',
			'label' => 'Title',
			'name' => 'title',
			'type' => 'text',
			'instructions' => 'Add a title',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'Vill du se mer av oss?',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
			'maxlength' => '',
		),
		array(
			'key' => 'field_5e8ef504f6cac',
			'label' => 'Text',
			'name' => 'text',
			'type' => 'textarea',
			'instructions' => '',
			'required' => 1,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'På våra sociala medier kan du hitta mer bilder från huset och alla roliga evenemang. Ta del av personliga historier, intervjuer med utövare och kuriosa om huset.
Låt dig inspireras av historia och nutid på vår Instagram eller Facebook.',
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
				'value' => 'page-templates/gallery.php',
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

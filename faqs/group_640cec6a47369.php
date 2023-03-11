<?php 

$field_group_array = array(
	'key' => 'group_640cec6a47369',
	'title' => 'FAQ Block',
	'fields' => array(
		array(
			'key' => 'field_640cec6ace5ef',
			'label' => 'Title',
			'name' => 'title',
			'aria-label' => '',
			'type' => 'text',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'default_value' => 'FAQs',
			'maxlength' => '',
			'placeholder' => '',
			'prepend' => '',
			'append' => '',
		),
		array(
			'key' => 'field_640cec7bce5f0',
			'label' => 'FAQs',
			'name' => 'faqs',
			'aria-label' => '',
			'type' => 'repeater',
			'instructions' => '',
			'required' => 0,
			'conditional_logic' => 0,
			'wrapper' => array(
				'width' => '',
				'class' => '',
				'id' => '',
			),
			'layout' => 'row',
			'pagination' => 0,
			'min' => 0,
			'max' => 0,
			'collapsed' => '',
			'button_label' => 'Add Row',
			'rows_per_page' => 20,
			'sub_fields' => array(
				array(
					'key' => 'field_640cec90ce5f1',
					'label' => 'Question',
					'name' => 'question',
					'aria-label' => '',
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
					'parent_repeater' => 'field_640cec7bce5f0',
				),
				array(
					'key' => 'field_640cec99ce5f2',
					'label' => 'Answer',
					'name' => 'answer',
					'aria-label' => '',
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
					'new_lines' => '',
					'parent_repeater' => 'field_640cec7bce5f0',
				),
			),
		),
	),
	'location' => array(
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
	'is_k17_acf_block' => 1,
	'is_k17_acf_component' => 0,
	'modified' => 1678568931,
);


<?php
if (!defined('HOME_ID')) {
	$homeId = get_option('page_on_front');
	define('HOME_ID', $homeId);
}

function home_first_section_fields($settings, $type, $id, $meta_type, $types)
{

	if (HOME_ID == $id) {

		$Section = SCF::add_setting('home-1', 'First section');

		$Section->add_group(
			'first_section',
			false,
			array(
				array(
					'name'        => 'first_title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first_text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'first_img',
					'label'       => 'Section image',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'first_bg',
					'label'       => 'Section background image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$Section->add_group(
			'first_list',
			true,
			array(
				array(
					'name'        => 'first_list_year',
					'label'       => 'List item year',
					'type'        => 'text',
				),
				array(
					'name'        => 'first_list_img',
					'label'       => 'List item image',
					'type'        => 'image',
					'size'        => 'small',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'home_first_section_fields', 1, 5);

function home_table_content_section_fields($settings, $type, $id, $meta_type, $types)
{

	if (HOME_ID == $id) {

		$Section = SCF::add_setting('home-2', 'Table of content section');

		$Section->add_group(
			'table_content_section',
			false,
			array(
				array(
					'name'        => 'table_content_title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'table_content_list',
			true,
			array(
				array(
					'name'        => 'table_content_list_name',
					'label'       => 'List item name',
					'type'        => 'text',
				),
				array(
					'name'        => 'table_content_list_text',
					'label'       => 'List item name',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'table_content_list_img',
					'label'       => 'List item image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'home_table_content_section_fields', 2, 5);

function home_antique_fonts_section_fields($settings, $type, $id, $meta_type, $types)
{

	if (HOME_ID == $id) {

		$Section = SCF::add_setting('home-3', 'Antique fonts section');

		$Section->add_group(
			'antique_fonts_section',
			false,
			array(
				array(
					'name'        => 'antique_fonts_bg',
					'label'       => 'Section background',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'antique_fonts_title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'antique_fonts_anchore',
					'label'       => 'Section anchore',
					'type'        => 'text',
				),
				array(
					'name'        => 'antique_fonts_sub',
					'label'       => 'Section subtitle',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'antique_fonts_text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'antique_fonts_pattern',
					'label'       => 'Section pattern',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'antique_fonts_portret',
					'label'       => 'Section portret',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'antique_fonts_autograf',
					'label'       => 'Section autograf',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'antique_fonts_label1',
					'label'       => 'Section label first',
					'type'        => 'image',
					'size'        => 'medium',
				),
				array(
					'name'        => 'antique_fonts_label2',
					'label'       => 'Section label second',
					'type'        => 'image',
					'size'        => 'medium',
				),
			)
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'home_antique_fonts_section_fields', 3, 5);

function home_during_section_fields($settings, $type, $id, $meta_type, $types)
{

	if (HOME_ID == $id) {

		$Section = SCF::add_setting('home-4', 'Antique fonts section');

		$Section->add_group(
			'during_section',
			false,
			array(
				array(
					'name'        => 'during_title',
					'label'       => 'Section title',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'during_anchore',
					'label'       => 'Section anchore',
					'type'        => 'text',
				),
				array(
					'name'        => 'during_sub',
					'label'       => 'Section subtitle',
					'type'        => 'wysiwyg',
				),
				array(
					'name'        => 'during_text',
					'label'       => 'Section text',
					'type'        => 'wysiwyg',
				),
			)
		);

		$Section->add_group(
			'during_gallery',
			true,
			array(
				array(
					'name'        => 'during_gallery_img',
					'label'       => 'Gallery image',
					'type'        => 'image',
					'size'        => 'medium',
				),
			),
		);

		$settings[] = $Section;
	}

	return $settings;
}
add_filter('smart-cf-register-fields', 'home_during_section_fields', 4, 5);

<?php

return array(
	'title'      => esc_html__( 'Single Post Settings', 'rufers' ),
	'id'         => 'single_post_setting',
	'desc'       => '',
	'subsection' => true,
	'fields'     => array(
		array(
			'id'      => 'single_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Single Post Source Type', 'rufers' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'rufers' ),
				'e' => esc_html__( 'Elementor', 'rufers' ),
			),
			'default' => 'd',
		),

		array(
			'id'       => 'single_default_st',
			'type'     => 'section',
			'title'    => esc_html__( 'Post Default', 'rufers' ),
			'indent'   => true,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
		array(
			'id'      => 'single_post_date',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Date', 'rufers' ),
			'desc'    => esc_html__( 'Enable to show post publish date on posts detail page', 'rufers' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_comments',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Comments', 'rufers' ),
			'desc'    => esc_html__( 'Enable to show number of comments on posts single page', 'rufers' ),
			'default' => true,
		),
		
		array(
			'id'      => 'single_post_author_box',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author Box', 'rufers' ),
			'desc'    => esc_html__( 'Enable to show author box on post detail page.', 'rufers' ),
			'default' => true,
		),
		array(
			'id'      => 'single_post_author_links',
			'type'    => 'switch',
			'title'   => esc_html__( 'Show Author Social Media', 'rufers' ),
			'desc'    => esc_html__( 'Enable to show author Social Media on posts detail page', 'rufers' ),
			'default' => true,
		),
		array(
			'id'    => 'single_post_author_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Author Social Profiles', 'rufers' ),
			'desc'    => esc_html__( 'show author Social Media on posts detail page', 'rufers' ),
		),
		array(
			'id'       => 'single_section_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'single_source_type', '=', 'd' ],
		),
	),
);






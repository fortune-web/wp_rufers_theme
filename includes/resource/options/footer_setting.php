<?php

return array(
	'title'      => esc_html__( 'Footer Setting', 'rufers' ),
	'id'         => 'footer_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'      => 'footer_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Footer Source Type', 'rufers' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'rufers' ),
				'e' => esc_html__( 'Elementor', 'rufers' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'footer_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'rufers' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'	=> -1
			],
			'required' => [ 'footer_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'footer_style_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Settings', 'rufers' ),
			'required' => array( 'footer_source_type', '=', 'd' ),
		),
		array(
		    'id'       => 'footer_style_settings',
		    'type'     => 'image_select',
		    'title'    => esc_html__( 'Choose Footer Styles', 'rufers' ),
		    'subtitle' => esc_html__( 'Choose Footer Styles', 'rufers' ),
		    'options'  => array(

			    'footer_v1'  => array(
				    'alt' => esc_html__( 'Footer Style 1', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer1.png',
			    ),
			    'footer_v2'  => array(
				    'alt' => esc_html__( 'Footer Style 2', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer2.png',
			    ),
				'footer_v3'  => array(
				    'alt' => esc_html__( 'Footer Style 3', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/footer/footer3.png',
			    ),
			),
			'required' => array( 'footer_source_type', '=', 'd' ),
			'default' => 'footer_v1',
	    ),
		
		
		/***********************************************************************
								Footer Version 1 Start
		************************************************************************/
		array(
			'id'       => 'footer_v1_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style One Settings', 'rufers' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
		),
		array(
            'id' => 'show_footer_top_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Subscribe Form', 'rufers'),
            'default' => true,
            'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
        ),
		array(
			'id'       => 'footer_logo_image',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'CTA Logo Image', 'rufers' ),
			'desc'     => esc_html__( 'Insert CTA Logo image for Footer', 'rufers' ),
			'default'  => '',
			'required' => array( 'show_footer_top_v1', '=', true ),
		),
		array(
			'id'      => 'cta_title',
			'type'    => 'text',
			'title'   => __( 'CTA Title', 'rufers' ),
			'desc'    => esc_html__( 'Enter the CTA Title', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v1', '=', true ),
		),
		array(
			'id'      => 'cta_text',
			'type'    => 'textarea',
			'title'   => __( 'CTA Text', 'rufers' ),
			'desc'    => esc_html__( 'Enter the CTA Text', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v1', '=', true ),
		),
		array(
			'id'      => 'cta_btn_title',
			'type'    => 'text',
			'title'   => __( 'CTA Button Title', 'rufers' ),
			'desc'    => esc_html__( 'Enter the CTA Button Title', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v1', '=', true ),
		),
		array(
			'id'      => 'cta_btn_link',
			'type'    => 'text',
			'title'   => __( 'CTA Button Link', 'rufers' ),
			'desc'    => esc_html__( 'Enter the CTA Button Link', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v1', '=', true ),
		),
		array(
			'id'      => 'cta_phone_no',
			'type'    => 'text',
			'title'   => __( 'CTA Phone Number', 'rufers' ),
			'desc'    => esc_html__( 'Enter the CTA Phone Number', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v1', '=', true ),
		),
		array(
			'id'      => 'copyright_text',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'rufers' ),
			'desc'    => esc_html__( 'Enter the Copyright Text', 'rufers' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
		),
		array(
			'id'      => 'footer_menu',
			'type'    => 'textarea',
			'title'   => __( 'Footer Menu html', 'rufers' ),
			'desc'    => esc_html__( 'Enter the raw html', 'rufers' ),
			'default' => '',
			'required' => array( 'footer_style_settings', '=', 'footer_v1' ),
		),
		
		/***********************************************************************
								Footer Version 2 Start
		************************************************************************/
		array(
			'id'       => 'footer_v2_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style Two Settings', 'rufers' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
		),
		array(
			'id'      => 'copyright_text2',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'rufers' ),
			'desc'    => esc_html__( 'Enter the Copyright Text', 'rufers' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
		),
		array(
			'id'      => 'footer_menu2',
			'type'    => 'textarea',
			'title'   => __( 'Footer Menu html', 'rufers' ),
			'desc'    => esc_html__( 'Enter the raw html', 'rufers' ),
			'default' => '',
			'required' => array( 'footer_style_settings', '=', 'footer_v2' ),
		),
		/***********************************************************************
								Footer Version 3 Start
		************************************************************************/
		array(
			'id'       => 'footer_v3_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Footer Style Three Settings', 'rufers' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v3' ),
		),
		array(
            'id' => 'show_footer_top_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Subscribe Form', 'rufers'),
            'default' => true,
            'required' => array( 'footer_style_settings', '=', 'footer_v3' ),
        ),
		array(
			'id'      => 'subscribe_form_title',
			'type'    => 'text',
			'title'   => __( 'Subscribe Form Title', 'rufers' ),
			'desc'    => esc_html__( 'Enter the Subscribe Form Title', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v3', '=', true ),
		),
		array(
			'id'      => 'subscribe_form_text',
			'type'    => 'textarea',
			'title'   => __( 'Subscribe Form Text', 'rufers' ),
			'desc'    => esc_html__( 'Enter the Subscribe Form Text', 'rufers' ),
			'default' => '',
			'required' => array( 'show_footer_top_v3', '=', true ),
		),
		array(
			'id'      => 'mailchimp_form_url3',
			'type'    => 'textarea',
			'title'   => __( 'MailChimp Form Url', 'rufers' ),
			'desc'    => esc_html__( 'Enter the MailChimp Form Url', 'rufers' ),
			'required' => array( 'show_footer_top_v3', '=', true ),
		),
		array(
			'id'       => 'footer_bg_img_2',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Footer BG Image', 'rufers' ),
			'desc'     => esc_html__( 'Insert BG image for Footer', 'rufers' ),
			'default'  => '',
			'required' => array( 'footer_style_settings', '=', 'footer_v3' )
		),
		array(
			'id'      => 'copyright_text_3',
			'type'    => 'textarea',
			'title'   => __( 'Copyright Text', 'rufers' ),
			'desc'    => esc_html__( 'Enter the Copyright Text', 'rufers' ),
			'required' => array( 'footer_style_settings', '=', 'footer_v3' ),
		),
		array(
			'id'       => 'footer_default_ed',
			'type'     => 'section',
			'indent'   => false,
			'required' => [ 'footer_source_type', '=', 'd' ],
		),
	),
);

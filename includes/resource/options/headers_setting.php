<?php
return array(
	'title'      => esc_html__( 'Header Setting', 'rufers' ),
	'id'         => 'headers_setting',
	'desc'       => '',
	'subsection' => false,
	'fields'     => array(
		array(
			'id'      => 'header_source_type',
			'type'    => 'button_set',
			'title'   => esc_html__( 'Header Source Type', 'rufers' ),
			'options' => array(
				'd' => esc_html__( 'Default', 'rufers' ),
				'e' => esc_html__( 'Elementor', 'rufers' ),
			),
			'default' => 'd',
		),
		array(
			'id'       => 'header_elementor_template',
			'type'     => 'select',
			'title'    => __( 'Template', 'rufers' ),
			'data'     => 'posts',
			'args'     => [
				'post_type' => [ 'elementor_library' ],
				'posts_per_page'	=> -1
			],
			'required' => [ 'header_source_type', '=', 'e' ],
		),
		array(
			'id'       => 'header_style_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Settings', 'rufers' ),
			'required' => array( 'header_source_type', '=', 'd' ),
		),
		array(
		    'id'       => 'header_style_settings',
		    'type'     => 'image_select',
		    'title'    => esc_html__( 'Choose Header Styles', 'rufers' ),
		    'subtitle' => esc_html__( 'Choose Header Styles', 'rufers' ),
		    'options'  => array(

			    'header_v1'  => array(
				    'alt' => esc_html__( 'Header Style 1', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header1.png',
			    ),
			    'header_v2'  => array(
				    'alt' => esc_html__( 'Header Style 2', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header2.png',
			    ),
				'header_v3'  => array(
				    'alt' => esc_html__( 'Header Style 3', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header3.png',
			    ),
				'header_v4'  => array(
				    'alt' => esc_html__( 'One Page Header Style', 'rufers' ),
				    'img' => get_template_directory_uri() . '/assets/images/redux/header/header4.png',
			    ),
			),
			'required' => array( 'header_source_type', '=', 'd' ),
			'default' => 'header_v1',
	    ),
	
			
		/***********************************************************************
								Header Version 1 Start
		************************************************************************/
		array(
			'id'       => 'header_v1_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style One Settings', 'rufers' ),
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
		),
		array(
		    'id'       => 'show_topbar_v1',
		    'type'     => 'switch',
		    'title'    => esc_html__( 'Enable header Topbar', 'rufers' ),
		    'desc'     => esc_html__( 'Enable/Disable header Topbar.', 'rufers' ),
			'default'  => '',
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'welcome_text_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Welcome Text', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Welcome Text', 'rufers' ),
		    'required' => array( 'show_topbar_v1', '=', true ),
	    ),
		array(
		    'id'       => 'phone_no_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'rufers' ),
		    'required' => array( 'show_topbar_v1', '=', true),
	    ),
		array(
		    'id'       => 'email_v1',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'rufers' ),
		    'required' => array( 'show_topbar_v1', '=', true ),
	    ),
		array(
			'id'    => 'header_v1_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'rufers' ),
			'required' => array( 'show_topbar_v1', '=', true ),
		),
		array(
            'id' => 'show_shoping_cart_icon_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Shoping Cart Icon', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),
		array(
            'id' => 'show_search_form_v1',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Search Form', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),
		array(
		    'id'       => 'btn_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Button Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Button Title', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		array(
		    'id'       => 'btn_link',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Button Link', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Button Link', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v1' ),
	    ),
		/***********************************************************************
								Sidebar Info
		************************************************************************/
		array(
            'id' => 'show_sidebar_info',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Sidebar Information', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v1' ),
        ),
		array(
		    'id'       => 'sidebar_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Sidebar Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter Sidebar Title', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'sidebar_text',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Description', 'rufers' ),
		    'desc'     => esc_html__( 'Enter Description', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'form_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Form Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Form Title', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'form_url',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Contact Form 7 Url', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Contact Form 7 Url', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'sidebar_sub_title',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Contact Info Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter Contact Info Title', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'sidebar_address',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Address', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'sidebar_phone_no',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
		    'id'       => 'sidebar_email_address',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		array(
			'id'    => 'sidebar_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'rufers' ),
			'required' => array( 'show_sidebar_info', '=', true ),
		),
		/***********************************************************************
								Header Version 2 Start
		************************************************************************/
		array(
			'id'       => 'header_v2_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Two Settings', 'rufers' ),
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
		),
		array(
		    'id'       => 'show_topbar_v2',
		    'type'     => 'switch',
		    'title'    => esc_html__( 'Enable header Topbar', 'rufers' ),
		    'desc'     => esc_html__( 'Enable/Disable header Topbar.', 'rufers' ),
			'default'  => '',
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'header_topbar_menu_v2',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Header Topbar Menu', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Topbar Menu Raw HTML', 'rufers' ),
		    'required' => array( 'show_topbar_v2', '=', true ),
	    ),
		array(
		    'id'       => 'welcome_text_v2',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Welcome Text', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Welcome Text', 'rufers' ),
		    'required' => array('show_topbar_v2', '=', true ),
	    ),
		array(
			'id'    => 'header_v2_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'rufers' ),
			'required' => array( 'show_topbar_v2', '=', true ),
		),
		array(
		    'id'       => 'address_v2',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The location address ', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
		    'id'       => 'phone_no_v2',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Phone Number', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
			'id'       => 'quote_icon_img',
			'type'     => 'media',
			'url'      => true,
			'title'    => esc_html__( 'Quote Iocn Image', 'rufers' ),
			'desc'     => esc_html__( 'Insert Quote Iocn image for header', 'rufers' ),
			'default'  => '',
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
		),
		array(
		    'id'       => 'quote_icon_link',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Quote Icon Image Link', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Quote Icon Image Link', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v2' ),
	    ),
		array(
            'id' => 'show_shoping_cart_icon_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Shoping Cart Icon', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),
		array(
            'id' => 'show_search_form_v2',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Search Form', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v2' ),
        ),
		
		/***********************************************************************
								Header Version 3 Start
		************************************************************************/
		array(
			'id'       => 'header_v3_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'Header Style Three Settings', 'rufers' ),
			'required' => array( 'header_style_settings', '=', 'header_v3' ),
		),
		array(
		    'id'       => 'show_topbar_v3',
		    'type'     => 'switch',
		    'title'    => esc_html__( 'Enable header Topbar', 'rufers' ),
		    'desc'     => esc_html__( 'Enable/Disable header Topbar.', 'rufers' ),
			'default'  => '',
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
		array(
		    'id'       => 'welcome_text_v3',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Welcome Text', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Welcome Text', 'rufers' ),
		    'required' => array(  'show_topbar_v3', '=', true  ),
	    ),
		array(
		    'id'       => 'email_address_v3',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'rufers' ),
		    'required' => array(  'show_topbar_v3', '=', true ),
	    ),
		array(
			'id'    => 'header_v3_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'rufers' ),
			'required' => array(  'show_topbar_v3', '=', true ),
		),
		array(
            'id' => 'show_search_icon_v3',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Search Form Icon', 'rufers'),
            'default' => true,
			'required' => array(  'show_topbar_v3', '=', true ),
        ),
		array(
		    'id'       => 'phone_no_v3',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Title And Phone Number', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Title and Phone Number', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v3' ),
	    ),
	
		/***********************************************************************
								Header Version 4 Start
		************************************************************************/
		array(
			'id'       => 'header_v4_settings_section_start',
			'type'     => 'section',
			'indent'      => true,
			'title'    => esc_html__( 'One Page Header Style Settings', 'rufers' ),
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
		),
		array(
		    'id'       => 'show_topbar_v4',
		    'type'     => 'switch',
		    'title'    => esc_html__( 'Enable header Topbar', 'rufers' ),
		    'desc'     => esc_html__( 'Enable/Disable header Topbar.', 'rufers' ),
			'default'  => '',
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'welcome_text_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Welcome Text', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Welcome Text', 'rufers' ),
		    'required' => array( 'show_topbar_v4', '=', true ),
	    ),
		array(
		    'id'       => 'phone_no_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'rufers' ),
		    'required' => array( 'show_topbar_v4', '=', true),
	    ),
		array(
		    'id'       => 'email_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'rufers' ),
		    'required' => array( 'show_topbar_v4', '=', true ),
	    ),
		array(
			'id'    => 'header_v4_social_share',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'rufers' ),
			'required' => array( 'show_topbar_v4', '=', true ),
		),
		array(
            'id' => 'show_shoping_cart_icon_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Shoping Cart Icon', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),
		array(
            'id' => 'show_search_form_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Search Form', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),
		array(
		    'id'       => 'btn_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Button Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Button Title', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		array(
		    'id'       => 'btn_link_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Button Link', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Button Link', 'rufers' ),
		    'required' => array( 'header_style_settings', '=', 'header_v4' ),
	    ),
		/***********************************************************************
								Sidebar Info
		************************************************************************/
		array(
            'id' => 'show_sidebar_info_v4',
            'type' => 'switch',
            'title' => esc_html__('Enable/Disable Sidebar Information', 'rufers'),
            'default' => true,
			'required' => array( 'header_style_settings', '=', 'header_v4' ),
        ),
		array(
		    'id'       => 'sidebar_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Sidebar Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter Sidebar Title', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'sidebar_text_v4',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Description', 'rufers' ),
		    'desc'     => esc_html__( 'Enter Description', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'form_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Form Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Form Title', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'form_url_v4',
		    'type'     => 'textarea',
		    'title'    => esc_html__( 'Contact Form 7 Url', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Contact Form 7 Url', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'sidebar_sub_title_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Contact Info Title', 'rufers' ),
		    'desc'     => esc_html__( 'Enter Contact Info Title', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'sidebar_address_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Address', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'sidebar_phone_no_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Phone Number', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Phone Number', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
		    'id'       => 'sidebar_email_address_v4',
		    'type'     => 'text',
		    'title'    => esc_html__( 'Email Address', 'rufers' ),
		    'desc'     => esc_html__( 'Enter The Email Address', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		array(
			'id'    => 'sidebar_social_share_v4',
			'type'  => 'social_media',
			'title' => esc_html__( 'Social Profiles', 'rufers' ),
			'required' => array( 'show_sidebar_info_v4', '=', true ),
		),
		/***********************************************************************/	
		array(
			'id'       => 'header_style_section_end',
			'type'     => 'section',
			'indent'      => false,
			'required' => [ 'header_source_type', '=', 'd' ],
		),
	),
);

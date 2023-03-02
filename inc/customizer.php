<?php

/**
 * Fancy Lab Theme Customizer
 *
 * @package Fancy Lab
 */

 function fancy_lab_customizer( $wp_customize ){

 	// Copyright Section
 	$wp_customize->add_section(
 		'sec_copyright', array(
 			'title'			=> __('Copyright Settings', 'fancy-lab'),
 			'description'	=> __('Copyright Section', 'fancy-lab')
 		)
 	);

	 	// Field 1 - Copyright Text Box
	 	$wp_customize->add_setting(
	 		'set_copyright', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'sanitize_text_field'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_copyright', array(
	 			'label'				=> __('Copyright', 'fancy-lab'),
	 			'description'		=> __('Please, add your copyright information here', 'fancy-lab'),
	 			'section'			=> 'sec_copyright',
	 			'type'				=> 'text'
	 		)
	 	);	

	 /***************************************************/

	 // Slider Section

 	$wp_customize->add_section(
 		'sec_slider', array(
 			'title'			=> __('Slider Settings', 'fancy-lab'),
 			'description'	=> __('Slider Section', 'fancy-lab'),
 		)
 	);	 	

 		// Field 1 - Slider Page Number 1

	 	$wp_customize->add_setting(
	 		'set_slider_page1', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_page1', array(
	 			'label'				=> __('Set slider page 1', 'fancy-lab'),
	 			'description'		=> __('Set slider page 1', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'dropdown-pages'
	 		)
	 	);

 		// Field 2 - Slider Button Text Number 1

	 	$wp_customize->add_setting(
	 		'set_slider_button_text1', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'sanitize_text_field'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_button_text1', array(
	 			'label'				=> __('Button Text for page 1', 'fancy-lab'),
	 			'description'		=> __('Button Text for page 1', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'text'
	 		)
	 	);

 		// Field 3 - Slider Button URL Number 1

	 	$wp_customize->add_setting(
	 		'set_slider_button_url1', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'esc_url_raw'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_button_url1', array(
	 			'label'				=> __('URL for page 1','fancy-lab'),
	 			'description'		=> __('URL for page 1','fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'url'
	 		)
	 	);	



 		// Field 4 - Slider Page Number 2

	 	$wp_customize->add_setting(
	 		'set_slider_page2', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_page2', array(
	 			'label'				=> __('Set slider page 2','fancy-lab'),
	 			'description'		=> __('Set slider page 2','fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'dropdown-pages'
	 		)
	 	);	 	

 		// Field 5 - Slider Button Text Number 2

	 	$wp_customize->add_setting(
	 		'set_slider_button_text2', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'sanitize_text_field'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_button_text2', array(
	 			'label'				=> __('Button Text for page 2', 'fancy-lab'),
	 			'description'		=> __('Button Text for page 2', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'text'
	 		)
	 	);

 		// Field 6 - Slider Button URL Number 2

	 	$wp_customize->add_setting(
	 		'set_slider_button_url2', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'esc_url_raw'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_button_url2', array(
	 			'label'				=> __('URL for page 2', 'fancy-lab'),
	 			'description'		=> __('URL for page 2', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'url'
	 		)
	 	);	 



 		// Field 7 - Slider Page Number 3

	 	$wp_customize->add_setting(
	 		'set_slider_page3', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_page3', array(
	 			'label'				=> __('Set slider page 3', 'fancy-lab'),
	 			'description'		=> __('Set slider page 3', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'dropdown-pages'
	 		)
	 	);	 	

 		// Field 8 - Slider Button Text Number 3

	 	$wp_customize->add_setting(
	 		'set_slider_button_text3', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'sanitize_text_field'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_button_text3', array(
	 			'label'				=> __('Button Text for page 3', 'fancy-lab'),
	 			'description'		=> __('Button Text for page 3', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'text'
	 		)
	 	);

 		// Field 9 - Slider Button URL Number 3

	 	$wp_customize->add_setting(
	 		'set_slider_button_url3', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'esc_url_raw'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_slider_button_url3', array(
	 			'label'				=> __('URL for page 3', 'fancy-lab'),
	 			'description'		=> __('URL for page 3', 'fancy-lab'),
	 			'section'			=> 'sec_slider',
	 			'type'				=> 'url'
	 		)
	 	);	


	/***************************************************/

	 // Home Page Settings

 	$wp_customize->add_section(
 		'sec_home_page', array(
 			'title'			=> __('Home Page Products and Blog Settings', 'fancy-lab'),
 			'description'	=> __('Home Page Section', 'fancy-lab'),
 		)
 	);	 	


	 	$wp_customize->add_setting(
	 		'set_popular_max_num', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_popular_max_num', array(
	 			'label'				=> __('Popular Products Max Number', 'fancy-lab'),
	 			'description'		=> __('Popular Products Max Number', 'fancy-lab'),
	 			'section'			=> 'sec_home_page',
	 			'type'				=> 'number'
	 		)
	 	);


	 	$wp_customize->add_setting(
	 		'set_popular_max_col', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_popular_max_col', array(
	 			'label'				=> __('Popular Products Max Columns', 'fancy-lab'),
	 			'description'		=> __('Popular Products Max Columns', 'fancy-lab'),
	 			'section'			=> 'sec_home_page',
	 			'type'				=> 'number'
	 		)
	 	);


	 	$wp_customize->add_setting(
	 		'set_new_arrivals_max_num', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_new_arrivals_max_num', array(
	 			'label'				=> __('New Arrivals Max Number', 'fancy-lab'),
	 			'description'		=> __('New Arrivals Max Number', 'fancy-lab'),
	 			'section'			=> 'sec_home_page',
	 			'type'				=> 'number'
	 		)
	 	);


	 	$wp_customize->add_setting(
	 		'set_new_arrivals_max_col', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_new_arrivals_max_col', array(
	 			'label'				=> __('New Arrivals Max Columns', 'fancy-lab'),
	 			'description'		=> __('New Arrivals Max Columns', 'fancy-lab'),
	 			'section'			=> 'sec_home_page',
	 			'type'				=> 'number'
	 		)
	 	);

	 	/*Deal of the Week checkbox*/
	 	//controlar a visibilidade da seção
		$wp_customize->add_setting(
	 		'set_deal_show', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'fancy_lab_sanitize_checkbox'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_deal_show', array(
	 			'label'				=> __('Show deal of the Week?', 'fancy-lab'),
	 			'section'			=> 'sec_home_page',
	 			'type'				=> 'checkbox'
	 		)
	 	);


	 	//vai guardar o id do produto

	 	$wp_customize->add_setting(
	 		'set_deal', array(
	 			'type'					=> 'theme_mod',
	 			'default'				=> '',
	 			'sanitize_callback'		=> 'absint'
	 		)
	 	);

	  	$wp_customize->add_control(
	 		'set_deal', array(
	 			'label'				=> __('Deal of the Week', 'fancy-lab'),
	 			'description'		=> __('Product ID to display', 'fancy-lab'),
	 			'section'			=> 'sec_home_page',
	 			'type'				=> 'number'
	 		)
	 	);

	 	/***********************************/
	  	
		// Field 10 - Blog Title
		$wp_customize->add_setting(
			'set_blog_title', array(
				'type' 				=> 'theme_mod',
				'default' 			=> '',
				'sanitize_callback' => 'sanitize_text_field'
			)
		);

		$wp_customize->add_control(
			'set_blog_title', array(
				'label' 		=> __('Blog Section Title', 'fancy-lab'),
				'description' 	=> __('Blog Section Title', 'fancy-lab'),
				'section' 		=> 'sec_home_page',
				'type' 			=> 'text'
			)
		);
 }
 add_action( 'customize_register', 'fancy_lab_customizer' );

 //função sanatizadora própria
 function fancy_lab_sanitize_checkbox($checked){
 	return( (isset( $checked ) && true == $checked ) ? true : false );
 }
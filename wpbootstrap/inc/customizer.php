<?php

	function wpb_customize_register($wp_customize){
		// Showcase section
		$wp_customize->add_section('showcase',array(
'title'=> __('Showcase', 'wpbootstrap'),
'description' => sprintf(__('Options for showcase','wpbootstrap')),
'priority' => 130
		));


		$wp_customize->add_setting('showcase_image',array(
'default' => get_bloginfo('template_directory').'/img/showcase.jpg',
'type' => 'theme_mod'
		));

$wp_customize->add_control(new WP_Customize_Image_Control($wp_customize,'showcase_image', array(
	'label' => __('Showcase Image','wpbootstrap'),
	'section' => 'showcase',
	'settings' => 'showcase_image',
	'priority' => 1

)));






		$wp_customize->add_setting('showcase_heading',array(
'default' => _x('Custom Bootsrap Wordpress Theme', 'wpbootstrap'),
'type' => 'theme_mod'
		));

$wp_customize->add_control('showcase_heading',array(

'label' => __('Heading','wpbootstrap'),
'section' => 'showcase',
'priority' => 2

));





		$wp_customize->add_setting('showcase_text',array(
'default' => _x('Educate yourself, reflect within, form opinions and stand up for them. Recognize your privilege, identify your own problematic behaviour and address it. ', 'wpbootstrap'),
'type' => 'theme_mod'
		));

$wp_customize->add_control('showcase_text',array(

'label' => __('Text','wpbootstrap'),
'section' => 'showcase',
'priority' => 3

));



$wp_customize->add_setting('button_url',array(
'default' => _x('http://test.com', 'wpbootstrap'),
'type' => 'theme_mod'
		));

$wp_customize->add_control('button_url',array(

'label' => __('Button URL','wpbootstrap'),
'section' => 'showcase',
'priority' => 4

));



$wp_customize->add_setting('button_text',array(
'default' => _x('Read More', 'wpbootstrap'),
'type' => 'theme_mod'
		));

$wp_customize->add_control('button_text',array(

'label' => __('Button Text','wpbootstrap'),
'section' => 'showcase',
'priority' => 3

));

	}



	add_action('customize_register', 'wpb_customize_register');
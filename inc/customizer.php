<?php
/**
 * SS Test Theme Customizer
 *
 * @package SS_Test
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function ss_test_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'ss_test_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'ss_test_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'ss_test_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function ss_test_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function ss_test_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function ss_test_customize_preview_js() {
	wp_enqueue_script( 'ss-test-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), _S_VERSION, true );
}
add_action( 'customize_preview_init', 'ss_test_customize_preview_js' );


function my_register_additional_customizer_settings( $wp_customize ) {
    $wp_customize->add_setting('ss_sub_title', array(
        'default' => 'Lorem Ipsum',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_sub_title', array(
        'label' => __('Sub Title', 'ss-test-theme-top-banner-text'),
        'section' => 'title_tagline',
        'settings' => 'ss_sub_title',
    )));

    $wp_customize->add_setting('ss_phone_number', array(
        'default' => '555-555-5555',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_phone_number', array(
        'label' => __('Phone Number', 'ss-test-theme-top-banner-text'),
        'section' => 'title_tagline',
        'settings' => 'ss_phone_number',
    )));

    $wp_customize->add_section('ss_head_section', array(
        'title' => __('Header Options', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_button_label', array(
        'default' => 'Lorem Ipsum',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_button_label', array(
        'label' => __('Button Label', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_head_section',
        'settings' => 'ss_button_label',
    )));

    $wp_customize->add_setting('ss_button_url', array(
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_button_url', array(
        'label' => __('Button URL', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_head_section',
        'settings' => 'ss_button_url',
    )));

    $wp_customize->add_setting('ss_box_title', array(
        'default' => 'PEOPLE. HONOR. GRIT.',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_box_title', array(
        'label' => __('Box Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_head_section',
        'settings' => 'ss_box_title',
    )));

    $wp_customize->add_setting('ss_box_stat', array(
        'default' => '750+',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_box_stat', array(
        'label' => __('Box Stat', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_head_section',
        'settings' => 'ss_box_stat',
    )));

    $wp_customize->add_setting('ss_box_description', array(
        'default' => 'Satisfied Customers',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_box_description', array(
        'label' => __('Box Description', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_head_section',
        'settings' => 'ss_box_description',
    )));


    //services

    $wp_customize->add_section('ss_services_section', array(
        'title' => __('Services Section', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_services_title', array(
        'default' => ' Our Services',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_services_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_services_section',
        'settings' => 'ss_services_title',
    )));

    $wp_customize->add_setting('ss_services_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum nibh neque, faucibus mollis urna fringilla nec. Proin nibh nisl, hendrerit nec efficitur in, ',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_services_description', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_services_section',
        'settings' => 'ss_services_description',
    )));

    $wp_customize->add_setting('ss_services_end_card_title', array(
        'default' => 'Lorem Ipsum',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_services_end_card_title', array(
        'label' => __('End Card Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_services_section',
        'settings' => 'ss_services_end_card_title',
    )));

    $wp_customize->add_setting('ss_services_end_card_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis eu odio euismod.',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_services_end_card_description', array(
        'label' => __('End Card Description', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_services_section',
        'settings' => 'ss_services_end_card_description',
    )));

    $wp_customize->add_setting('ss_services_end_card_btn_lbl', array(
        'default' => 'Lorem ipsum',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_services_end_card_btn_lbl', array(
        'label' => __('End Card Button Label', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_services_section',
        'settings' => 'ss_services_end_card_btn_lbl',
    )));

    $wp_customize->add_setting('ss_services_end_card_btn_url', array(
        'default' => '#',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_services_end_card_btn_url', array(
        'label' => __('End Card Button URL', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_services_section',
        'settings' => 'ss_services_end_card_btn_url',
    )));


    //about us
    $wp_customize->add_section('ss_about_us_section', array(
        'title' => __('About Us Section', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_about_us_title', array(
        'default' => ' Lorem Ipsum Dolor',
        'transport' => 'refresh',
        'sanitize_callback' => 'sanitize_text_field',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_about_us_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_title',
    )));

    $wp_customize->add_setting('ss_about_us_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum nibh neque, faucibus mollis urna fringilla nec. Proin nibh nisl, hendrerit nec efficitur in, convallis in ante. Morbi tempor ligula quis accumsan laoreet. Fusce dapibus tellus non auctor pellentesque. Vivamus tristique ipsum in urna feugiat, vestibulum condimentum massa semper.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_description', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_description',
    )));

    $wp_customize->add_setting('ss_about_us_box1_title', array(
        'default' => '2000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box1_title', array(
        'label' => __('Box 1 Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box1_title',
    )));

    $wp_customize->add_setting('ss_about_us_box1_subtitle', array(
        'default' => 'Year Established',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box1_subtitle', array(
        'label' => __('Box 1 Sub-Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box1_subtitle',
    )));

    $wp_customize->add_setting('ss_about_us_box2_title', array(
        'default' => '3,000',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box2_title', array(
        'label' => __('Box 2 Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box2_title',
    )));

    $wp_customize->add_setting('ss_about_us_box2_subtitle', array(
        'default' => 'Projects Completed',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box2_subtitle', array(
        'label' => __('Box 2 Sub-Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box2_subtitle',
    )));

    $wp_customize->add_setting('ss_about_us_box3_title', array(
        'default' => '750+',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box3_title', array(
        'label' => __('Box 3 Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box3_title',
    )));

    $wp_customize->add_setting('ss_about_us_box3_subtitle', array(
        'default' => 'Satisfied Customers',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box3_subtitle', array(
        'label' => __('Box 3 Sub-Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box3_subtitle',
    )));

    $wp_customize->add_setting('ss_about_us_box4_title', array(
        'default' => '100+',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box4_title', array(
        'label' => __('Box 4 Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box4_title',
    )));

    $wp_customize->add_setting('ss_about_us_box4_subtitle', array(
        'default' => 'Lorem Ipsum Dolor',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_box4_subtitle', array(
        'label' => __('Box 4 Sub-Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_box4_subtitle',
    )));

    $wp_customize->add_setting('ss_about_us_btn_label', array(
        'default' => 'About Us',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_btn_label', array(
        'label' => __('Button Label', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_btn_label',
    )));

    $wp_customize->add_setting('ss_about_us_btn_url', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_about_us_btn_url', array(
        'label' => __('Button URL', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_about_us_section',
        'settings' => 'ss_about_us_btn_url',
    )));


    // clients
    $wp_customize->add_section('ss_clients_section', array(
        'title' => __('Our Clients', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_clients_title', array(
        'default' => 'Our Clients',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_clients_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_clients_section',
        'settings' => 'ss_clients_title',
    )));



    // works
    $wp_customize->add_section('ss_our_work_section', array(
        'title' => __('Our Work Section', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_our_work_title', array(
        'default' => 'Our Work',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_our_work_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_our_work_section',
        'settings' => 'ss_our_work_title',
    )));



    // locations
    $wp_customize->add_section('ss_our_locations_section', array(
        'title' => __('Our Locations', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_our_locations_title', array(
        'default' => 'Our Locations',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_our_locations_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_our_locations_section',
        'settings' => 'ss_our_locations_title',
    )));



    // testimonials
    $wp_customize->add_section('ss_testimonials_section', array(
        'title' => __('Testimonial Section', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_testimonials_title', array(
        'default' => 'What People Say About Us',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_testimonials_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_testimonials_section',
        'settings' => 'ss_testimonials_title',
    )));

    $wp_customize->add_setting('ss_testimonials_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_testimonials_description', array(
        'label' => __('Description', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_testimonials_section',
        'settings' => 'ss_testimonials_description',
    )));



    // our projects
    $wp_customize->add_section('ss_our_projects_section', array(
        'title' => __('Projects Section', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_our_projects_title', array(
        'default' => 'Let’s Talk About Your Project',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_our_projects_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_our_projects_section',
        'settings' => 'ss_our_projects_title',
    )));

    $wp_customize->add_setting('ss_our_projects_description', array(
        'default' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer fermentum nibh neque, faucibus mollis urna fringilla nec.',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Code_Editor_Control($wp_customize, 'ss_our_projects_description', array(
        'label' => __('Description', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_our_projects_section',
        'settings' => 'ss_our_projects_description',
    )));

    $wp_customize->add_setting('ss_our_projects_btn_lbl', array(
        'default' => 'Get In Touch',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_our_projects_btn_lbl', array(
        'label' => __('Button Label', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_our_projects_section',
        'settings' => 'ss_our_projects_btn_lbl',
    )));

    $wp_customize->add_setting('ss_our_projects_btn_url', array(
        'default' => '#',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_our_projects_btn_url', array(
        'label' => __('Button URL', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_our_projects_section',
        'settings' => 'ss_our_projects_btn_url',
    )));



    // footer section
    $wp_customize->add_section('ss_footer_section', array(
        'title' => __('Footer Section', 'webfx-test-head'),
        'priority' => 30,
    ));

    $wp_customize->add_setting('ss_footer_newsletter_title', array(
        'default' => 'Sign Up for Our Newsletter',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_footer_newsletter_title', array(
        'label' => __('Title', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_footer_section',
        'settings' => 'ss_footer_newsletter_title',
    )));

    $wp_customize->add_setting('ss_footer_logo', array(
        'default' => 'Sign Up for Our Newsletter',
        'transport' => 'refresh',
    ));
    $wp_customize->add_control(new WP_Customize_Control($wp_customize, 'ss_footer_logo', array(
        'label' => __('Footer Logo', 'ss-test-theme-top-banner-text'),
        'section' => 'ss_footer_section',
        'settings' => 'ss_footer_logo',
    )));
}
add_action( 'customize_register', 'my_register_additional_customizer_settings' );

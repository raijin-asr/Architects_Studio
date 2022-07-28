<?php
/**
 * Travel Practice Theme Customizer
 *
 * @package Travel_Practice
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function travelpractice_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial( 'blogname', array(
			'selector'        => '.site-title a',
			'render_callback' => 'travelpractice_customize_partial_blogname',
		) );
		$wp_customize->selective_refresh->add_partial( 'blogdescription', array(
			'selector'        => '.site-description',
			'render_callback' => 'travelpractice_customize_partial_blogdescription',
		) );







//section Top Contact Info
		$wp_customize->add_section( 'about_section' , array(
    'title'    => esc_html__( 'Top Contact Info', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingtci1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingtci1', array(
    'label'       => esc_html__( 'Number', 'about' ),
    'section'     => 'about_section',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingtci2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingtci2', array(
    'label'       => esc_html__( 'Email', 'about' ),
    'section'     => 'about_section',
    'type'        => 'input',
    
) );



$wp_customize->add_setting( 'about_settingtci3', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingtci3', array(
    'label'       => esc_html__( 'Office Time', 'about' ),
    'section'     => 'about_section',
    'type'        => 'input',
) );


//section Tagline
		$wp_customize->add_section( 'about_sectiontag' , array(
    'title'    => esc_html__( 'Tagline', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingtag1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingtag1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectiontag',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingtag2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingtag2', array(
    'label'       => esc_html__( 'description', 'about' ),
    'section'     => 'about_sectiontag',
    'type'        => 'input',
    
) );


//section Projects
		$wp_customize->add_section( 'about_sectionpro' , array(
    'title'    => esc_html__( 'Projects', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingpro1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingpro1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionpro',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingpro2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingpro2', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionpro',
    'type'        => 'input',
    
) );


//section Services
		$wp_customize->add_section( 'about_sectionser' , array(
    'title'    => esc_html__( 'Services', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingser1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingser1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionser',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingser2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingser2', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionser',
    'type'        => 'input',
    
) );




//section Portfolio Projects
		$wp_customize->add_section( 'about_sectionfoliopro' , array(
    'title'    => esc_html__( 'Projects Gallery', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingfoliopro1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoliopro1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionfoliopro',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingfoliopro2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoliopro2', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionfoliopro',
    'type'        => 'input',
    
) );

$wp_customize->add_setting( 'about_settingfoliopro3', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoliopro3', array(
    'label'       => esc_html__( 'Button Category1', 'about' ),
    'section'     => 'about_sectionfoliopro',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingfoliopro4', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoliopro4', array(
    'label'       => esc_html__( 'Button Category2', 'about' ),
    'section'     => 'about_sectionfoliopro',
    'type'        => 'input',
    
) );

$wp_customize->add_setting( 'about_settingfoliopro5', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoliopro5', array(
    'label'       => esc_html__( 'Button Category3', 'about' ),
    'section'     => 'about_sectionfoliopro',
    'type'        => 'input',
    
) );




//section Header Image data
		$wp_customize->add_section( 'about_sectionhd' , array(
    'title'    => esc_html__( 'Header Image Box Info', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settinghd5', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settinghd5', array(
    'label'       => esc_html__( 'Box1 Description', 'about' ),
    'section'     => 'about_sectionhd',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settinghd6', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settinghd6', array(
    'label'       => esc_html__( 'Box2 Description', 'about' ),
    'section'     => 'about_sectionhd',
    'type'        => 'input',
    
) );





//section Projects Know more
		$wp_customize->add_section( 'about_sectionknow' , array(
    'title'    => esc_html__( 'Project Know more', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingknow1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingknow1', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionknow',
    'type'        => 'input',
    
) );


//section More Projects
        $wp_customize->add_section( 'about_sectionmorepro' , array(
    'title'    => esc_html__( 'More Projects Button Info', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingmorepro1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingmorepro1', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionmorepro',
    'type'        => 'input',
    
) );


//section More Services
        $wp_customize->add_section( 'about_sectionmoreser' , array(
    'title'    => esc_html__( 'More Services Button Info', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingmoreser1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingmoreser1', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionmoreser',
    'type'        => 'input',
    
) );


//section Form Data
		$wp_customize->add_section( 'about_sectionform' , array(
    'title'    => esc_html__( 'Form Data', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingform1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingform1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionform',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingform2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingform2', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionform',
    'type'        => 'input',
    
) );


//section footer menu
		$wp_customize->add_section( 'about_sectionfoomenu' , array(
    'title'    => esc_html__( 'Footer Menu', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingfoomenu1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoomenu1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionfoomenu',
    'type'        => 'input',
    
) );




//section footer about us
		$wp_customize->add_section( 'about_sectionfooaboutus' , array(
    'title'    => esc_html__( 'Footer About us', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingfooaboutus1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfooaboutus1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionfooaboutus',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingfooaboutus2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfooaboutus2', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectionfooaboutus',
    'type'        => 'input',
    
) );



//section Footer Contact
		$wp_customize->add_section( 'about_sectionfoocon' , array(
    'title'    => esc_html__( 'Footer Contact', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingfoocon1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoocon1', array(
    'label'       => esc_html__( 'Title', 'about' ),
    'section'     => 'about_sectionfoocon',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingfoocon2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoocon2', array(
    'label'       => esc_html__( 'Address', 'about' ),
    'section'     => 'about_sectionfoocon',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingfoocon3', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoocon3', array(
    'label'       => esc_html__( 'Email', 'about' ),
    'section'     => 'about_sectionfoocon',
    'type'        => 'input',
    
) );



$wp_customize->add_setting( 'about_settingfoocon4', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoocon4', array(
    'label'       => esc_html__( 'Mobile No:', 'about' ),
    'section'     => 'about_sectionfoocon',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingfoocon5', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingfoocon5', array(
    'label'       => esc_html__( 'Phone No:', 'about' ),
    'section'     => 'about_sectionfoocon',
    'type'        => 'input',
    
) );




//section Copyright
		$wp_customize->add_section( 'about_sectioncopy' , array(
    'title'    => esc_html__( 'Copyright', 'about' ),
    'priority' => 70,
) );

$wp_customize->add_setting( 'about_settingcopy1', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingcopy1', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectioncopy',
    'type'        => 'input',
    
) );


$wp_customize->add_setting( 'about_settingcopy2', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingcopy2', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectioncopy',
    'type'        => 'input',
    
) );





$wp_customize->add_setting( 'about_settingcopy3', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingcopy3', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectioncopy',
    'type'        => 'input',
    
) );



$wp_customize->add_setting( 'about_settingcopy4', array(
    'transport'         =>  'refresh',
    'default'           => __( '', 'about' ),
    
) );

$wp_customize->add_control( 'about_settingcopy4', array(
    'label'       => esc_html__( 'Description', 'about' ),
    'section'     => 'about_sectioncopy',
    'type'        => 'input',
    
) );



	}
}
add_action( 'customize_register', 'travelpractice_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function travelpractice_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function travelpractice_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function travelpractice_customize_preview_js() {
	wp_enqueue_script( 'travelpractice-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'travelpractice_customize_preview_js' );

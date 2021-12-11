<?php


function service_list_register( $wp_customize ) {

$wp_customize->add_setting( 'customizer_repeater_example', array(
    'sanitize_callback' => 'customizer_repeater_sanitize',
    'default' => json_encode( array(
      'default' => '',
                     'type' => 'option'
       ) )
) );


$wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_repeater_example', array(
	'label'   => esc_html__('Блок','customizer-repeater'),
	'section' => 'service_list',
	'priority' => 1,


	'customizer_repeater_icon_control' => true,
	'customizer_repeater_title_control' => true,
	'customizer_repeater_text_control' => true,




 ) ) );

$wp_customize->add_setting( 'customizer_repeater_example' );

}

add_action( 'customize_register', 'service_list_register' );
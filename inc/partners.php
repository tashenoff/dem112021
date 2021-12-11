<?php


function partners_list_register( $wp_customize ) {

$wp_customize->add_setting( 'customizer_repeater_partners', array(
    'sanitize_callback' => 'customizer_repeater_sanitize',
    'default' => json_encode( array(
      'default' => '',
                     'type' => 'option'
       ) )
) );


$wp_customize->add_control( new Customizer_Repeater( $wp_customize, 'customizer_repeater_partners', array(
	'label'   => esc_html__('Блок','customizer-repeater'),
	'section' => 'partners_list',
	'priority' => 1,


'customizer_repeater_image_control' => true,
	'customizer_repeater_icon_control' => true,
	'customizer_repeater_title_control' => true,






 ) ) );

$wp_customize->add_setting( 'customizer_repeater_partners' );

}


add_action( 'customize_register', 'partners_list_register' );
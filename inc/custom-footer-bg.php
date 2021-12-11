<?php

function custom_footer_banner_register( $wp_customize ) {

$wp_customize->add_setting( 'theme_footer_bg' );


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,'theme_footer_bg',array(
            'label' => 'Картинка на футер',
            'section' => 'data_banner_section',
            'settings' => 'theme_footer_bg',
            'priority' => 2
        )
    )
);

}


add_action( 'customize_register', 'custom_footer_banner_register' );


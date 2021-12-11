<?php

function header_banner_register( $wp_customize ) {

$wp_customize->add_setting( 'theme_header_bg' );


$wp_customize->add_setting(
    // ID
    'banner-title',
    // Arguments array
    array(
        'default' => 'Новый заголовок',
        'type' => 'option'
    )
);

$wp_customize->add_setting(
    // ID
    'banner-sub_title',
    // Arguments array
    array(
        'default' => 'Подзаголовок',
        'type' => 'option'
    )
);


$wp_customize->add_control(
    // ID
    'banner_sub-title_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Подзаголовок",
        'section' => 'data_banner_section',
        // This last one must match setting ID from above
        'settings' => 'banner-sub_title'
    )
);

$wp_customize->add_control(
    // ID
    'banner_text_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Заголовок баннера в шапке",
        'section' => 'data_banner_section',
        // This last one must match setting ID from above
        'settings' => 'banner-title'
    )
);


$wp_customize->add_control(
    new WP_Customize_Image_Control(
        $wp_customize,'theme_header_bg',array(
           'label' => 'Картинка на главный беннер',
           'banner-title'  => 'banner-title',
           'banner-sub_title' => 'banner-sub_title',
           'section' => 'data_banner_section',
           'settings' => 'theme_header_bg',
           'priority' => 2
        )
    )
);


}

add_action( 'customize_register', 'header_banner_register' );
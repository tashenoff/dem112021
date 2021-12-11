<?php

function viola_customize_register( $wp_customize ) {

    

$wp_customize->add_section(
    // ID
    'service_list',
    // Arguments array
    array(
        'title' => 'блок преимущества',
        'capability' => 'edit_theme_options',
        'description' => "Тут можно указать преимущества"
    )
);


$wp_customize->add_section(
    // ID
    'partners_list',
    // Arguments array
    array(
        'title' => 'блок партнеров',
        'capability' => 'edit_theme_options',
        'description' => "Тут можно добавить партнеров"
    )
);



/*
Добавляем секцию в настройки темы
*/
$wp_customize->add_section(
    // ID
    'data_site_section',
    // Arguments array
    array(
        'title' => 'Данные сайта',
        'capability' => 'edit_theme_options',
        'description' => "Тут можно указать данные сайта"
    )
);


$wp_customize->add_section(
    // ID
    'data_banner_section',
    // Arguments array
    array(
        'title' => 'Баннеры',
        'capability' => 'edit_theme_options',
        'description' => "Тут можно указать данные сайта"
    )
);



    /*
Добавляем поле телефона site_telephone
*/
$wp_customize->add_setting(
    // ID
    'site_telephone',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);



$wp_customize->add_control(
    // ID
    'site_telephone_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Текст с телефоном",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'site_telephone'
    )
);




$wp_customize->add_control(
    // ID
    'theme_contacttext_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Текст с контактной информацией",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_contacttext'
    )
);




/*
Добавляем поле контактных данных
*/
$wp_customize->add_setting(
    // ID
    'theme_contacttext',
    // Arguments array
    array(
        'default' => '',
        'type' => 'option'
    )
);
$wp_customize->add_control(
    // ID
    'theme_contacttext_control',
    // Arguments array
    array(
        'type' => 'text',
        'label' => "Текст с контактной информацией",
        'section' => 'data_site_section',
        // This last one must match setting ID from above
        'settings' => 'theme_contacttext'
    )
);




}

add_action( 'customize_register', 'viola_customize_register' );
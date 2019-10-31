<?php
function bupotheme_customize_register($wp_customize)
{
    /*#################### SHOWBOX ################*/
    //Showbox Section
    $wp_customize->add_section('bupotheme_showbox_section', array(
        'title' => esc_html__('ShowBox', 'bupo'),
        'description'   => esc_html__('Edit showbox text', 'bupo'),
        'priority'  => 30
    ));


    //Showbox Title setting
    $wp_customize->add_setting('bupotheme_showbox_title_setting', array(
        'default'   => 'The ShowBox',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Showbox Title control
    $wp_customize->add_control('bupotheme_showbox_title_setting', array(
        'type'  => 'text',
        'label' => esc_html__('Showbox Title', 'bupo'),
        'section'   => 'bupotheme_showbox_section'
    ));


    //Showbox Description Setting
    $wp_customize->add_setting('showbox_des_setting', array(
        'default'   => esc_html__('Cras justo odio, dapibus ac facilisis in, egestas eget quam.                             Fusce dapibus, tellus ac cursus commodo, tortor mauris                                  condimentum nibh, ut fermentum massa justo sit amet risus.', 'bupo'),
        'sanitize_callback' => 'sanitize_text_field'

    ));

    //Showbox Desciption Controll
    $wp_customize->add_control('showbox_des_setting', array(
        'type'  => 'text',
        'label' => 'Showbox Description',
        'section'  => 'bupotheme_showbox_section'
    ));

    //Showbox Button Text
    $wp_customize->add_setting('showbox_button_title', array(
        'default'   => esc_html__('Join Today', 'bupo'),
        'sanitize_callback' => 'sanitize_text_field'

    ));

    //Showbox Button Text
    $wp_customize->add_control('showbox_button_title', array(
        'type'  => 'text',
        'label' => esc_html__('Button Text', 'bupo'),
        'section'   => 'bupotheme_showbox_section'
    ));

    //Showbox Button url setting
    $wp_customize->add_setting('showbox_button_url', array(
        'default'   => esc_url('www.google.com'),
        'sanitize_callback' => 'sanitize_url'
    ));
    //Showbox Button url contro
    $wp_customize->add_control('showbox_button_url', array(
        'type'  => 'text',
        'label' => 'Button Url',
        'section'   => 'bupotheme_showbox_section'
    ));


    //Showbox Background Image Setting
    $wp_customize->add_setting('showbox_background_image', array(
        'default'   => get_bloginfo('template_directory') . '/img/showcase.jpg',
    ));

    //Showbox Background Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'showbox_background_image', array(
        'label' => esc_html__('Background Image', 'bupo'),
        'section'   => 'bupotheme_showbox_section',
        'setting'   => 'showbox_background_image'
    )));


    /*#################### BOX ################*/

    //Box1 Title Setting
    $wp_customize->add_setting('box1_title_setting', array(
        'default'   => 'Subheading',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box1 Title Control
    $wp_customize->add_control('box1_title_setting', array(
        'type'  => 'text',
        'label' => 'Box1 Title',
        'section' => 'bupotheme_showbox_section'
    ));

    //Box1 Descripton Setting
    $wp_customize->add_setting('box1_description_setting', array(
        'default'   => 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box1 Descripton Control
    $wp_customize->add_control('box1_description_setting', array(
        'type'  => 'text',
        'label' => 'Box1 Descripton',
        'section' => 'bupotheme_showbox_section'
    ));

    //Box1 Icon Setting
    $wp_customize->add_setting('box1_icon_setting', array(
        'default'   => 'fa-bar-chart',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box1 Icon Control
    $wp_customize->add_control('box1_icon_setting', array(
        'type'  => 'text',
        'label' => 'Box1 Icon',
        'section' => 'bupotheme_showbox_section'
    ));
    /////////////////////////Box2//////////////////////
    //Box2 Title Setting
    $wp_customize->add_setting('box2_title_setting', array(
        'default'   => 'Subheading',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box2 Title Control
    $wp_customize->add_control('box2_title_setting', array(
        'type'  => 'text',
        'label' => 'Box2 Title',
        'section' => 'bupotheme_showbox_section'
    ));

    //Box2 Descripton Setting
    $wp_customize->add_setting('box2_description_setting', array(
        'default'   => 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box2 Descripton Control
    $wp_customize->add_control('box2_description_setting', array(
        'type'  => 'text',
        'label' => 'Box2 Descripton',
        'section' => 'bupotheme_showbox_section'
    ));

    //Box2 Icon Setting
    $wp_customize->add_setting('box2_icon_setting', array(
        'default'   => 'fa-code',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box2 Icon Control
    $wp_customize->add_control('box2_icon_setting', array(
        'type'  => 'text',
        'label' => 'Box2 Icon',
        'section' => 'bupotheme_showbox_section'
    ));

    ////////////////////////Box3/////////////////
    //Box3 Title Setting
    $wp_customize->add_setting('box3_title_setting', array(
        'default'   => 'Subheading',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box3 Title Control
    $wp_customize->add_control('box3_title_setting', array(
        'type'  => 'text',
        'label' => 'Box3 Title',
        'section' => 'bupotheme_showbox_section'
    ));

    //Box3 Descripton Setting
    $wp_customize->add_setting('box3_description_setting', array(
        'default'   => 'Donec id elit non mi porta gravida at eget metus. Maecenas faucibus mollis interdum',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box3 Descripton Control
    $wp_customize->add_control('box3_description_setting', array(
        'type'  => 'text',
        'label' => 'Box3 Descripton',
        'section' => 'bupotheme_showbox_section'
    ));

    //Box3 Icon Setting
    $wp_customize->add_setting('box3_icon_setting', array(
        'default'   => 'fa-desktop',
        'sanitize_callback' => 'sanitize_text_field'
    ));

    //Box3 Icon Control
    $wp_customize->add_control('box3_icon_setting', array(
        'type'  => 'text',
        'label' => 'Box3 Icon',
        'section' => 'bupotheme_showbox_section'
    ));


    /*#################### Section Image ################*/

    //Section Image Setting
    $wp_customize->add_setting('content_section_background_image', array(
        'default'   => get_bloginfo('template_directory') . '/img/blog1.jpg',
    ));

    //Section Image control
    $wp_customize->add_control(new WP_Customize_Image_Control($wp_customize, 'content_section_background_image', array(
        'label' => esc_html__('Section Image', 'bupo'),
        'section'   => 'bupotheme_showbox_section',
        'setting'   => 'content_section_background_image'
    )));
}
add_action('customize_register', 'bupotheme_customize_register');

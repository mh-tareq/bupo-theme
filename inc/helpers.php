<?php

//Navigation Registration
function bupotheme_register_nav()
{
    register_nav_menus(array(
        'primary_menu' => esc_html__('Primary Menu', 'bupo')
    ));
}
add_action('after_setup_theme', 'bupotheme_register_nav');

function bupotheme_widgets_registration()
{
    //Fulwidth Content
    register_sidebar(array(
        'name'          => __('FullWidth Content', 'bupotheme'),
        'id'            => 'fullwidth-widget',
        'before_widget' => '<section class="row content-region-1 pt50 pb40">
                            <div class="container">
                            <div class="col-md-12">
                            <div id="%1$s" class="%2$s">',
        'after_widget'  => '</div></div></div></section>',
        'before_title'  => '<h1>',
        'after_title'   => '</h1>'
    ));

    //Footer1
    register_sidebar(array(
        'name'          => __('Footer1', 'bupotheme'),
        'id'            => 'footer1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    //Footer2
    register_sidebar(array(
        'name'          => __('Footer2', 'bupotheme'),
        'id'            => 'footer2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    //Footer3
    register_sidebar(array(
        'name'          => __('Footer3', 'bupotheme'),
        'id'            => 'footer3',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));

    //Sidebar
    register_sidebar(array(
        'name'          => __('Primary Sidebar', 'bupotheme'),
        'id'            => 'sidebar',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h4>',
        'after_title'   => '</h4>'
    ));
}
add_action('widgets_init', 'bupotheme_widgets_registration');

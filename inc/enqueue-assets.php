<?php

wp_enqueue_style('bootstarap-css', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0.0', 'all');
wp_enqueue_style('font-awesome', get_template_directory_uri() . '/css/font-awesome.css', array(), '1.0.0', 'all');
wp_enqueue_style('main-stylesheet', get_template_directory_uri() . '/css/style.css', array(), '1.0.0', 'all');


wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0', true);

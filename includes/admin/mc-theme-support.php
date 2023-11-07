<?php

/**
 * En este archivo, agregamos las funciones basicas del tema
 * usando los hooks predeterminados de WordPress
 */

// Habilitamos la imagen destacada a TODOS los post types
// ejemplo: Post, Page y CPT's
add_theme_support('post-thumbnails');

// Habilitamos el soporte a Menus
add_theme_support('menus');

function mc_theme_register_my_menus()
{
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'extra-menu' => __('Extra Menu')
        )
    );
}

//Agregamos logo Personalizado
add_theme_support('custom-logo');

// Agregamos tamaños de imagenes
add_image_size('mc-theme-large-picture', 1080, 1080);

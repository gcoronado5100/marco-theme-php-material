<?php

// Setup
/**
 * Creamos las variables Globales, y Constantes de nuestro theme
 */
define('MC_THEME_DIR', get_template_directory()); // Representa la direccion del tema en el sistema de archivos
define('MC_THEME_URI', get_stylesheet_directory_uri()); // Representa la direcion URL de un elemento del tema

// Includes
/**
 * Incluimos los archivos de PHP que conforman a mi theme
 * Pero que no son reconocidos por WordPress
 */


include(MC_THEME_DIR . '/includes/admin/mc-enqueue.php');
include(MC_THEME_DIR . '/includes/admin/mc-theme-support.php');


// Hooks
/**
 * Se hace el llamado a las funciones adicionales del theme para su
 * correcto funcionamiento, enganchandolas en el hook apropiado
 */

// Embebemos archivos personalizados de CSS y JS
add_action('init', 'mc_theme_register_my_menus');
add_action('wp_enqueue_scripts', 'mc_enqueue_cb');

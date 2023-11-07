<?php

/**
 * Esta funcion inluye los archivos de CSS y JS personalizados 
 * que son necesarios en nuestro tema
 */

function mc_enqueue_cb()
{
    // CSS
    // Enqueue Font Awesome CSS
    wp_enqueue_style('mc-theme-font-awesome', 'https://use.fontawesome.com/releases/v5.11.2/css/all.css', [], null, 'all');

    // Enqueue Google Fonts Roboto CSS
    wp_enqueue_style('mc-theme-google-fonts-roboto', 'https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap', [], null, 'all');

    // Enqueue mdb-min
    wp_enqueue_style('mc-theme-mdb-min',MC_THEME_URI . '/assets/css/mdb.min.css', [], null, 'all');

    // Enqueue Custom CSS
    wp_enqueue_style('mc-theme-custom-style', MC_THEME_URI . '/assets/css/style.css', [], null, 'all');

    // JS
    // Enqueue MDB JS
    wp_enqueue_script('mc-theme-mdb-js', MC_THEME_URI . '/assets/js/mdb.min.js', [], null, true);

    // Enqueue Custom
    wp_enqueue_script('mc-theme-custom-script', MC_THEME_URI . '/assets/js/script.js', [], null, true);
}

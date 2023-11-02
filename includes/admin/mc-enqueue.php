<?php

/**
 * Esta funcion inluye los archivos de CSS y JS personalizados 
 * que son necesarios en nuestro tema
 */

function mc_enqueue_cb()
{
    // CSS
    wp_enqueue_style('mc-theme-mdb-min', MC_THEME_URI . '/assets/css/mdb.min.css', [], null, 'all');

    // JS
    wp_enqueue_script('mc-theme-mdb-js', MC_THEME_URI . '/assets/js/mdb.min.js', [], null, true);
}

<?php

function onews_register_styles()
{
    // On indique que le CSS onews-style dépend de la présence de onews-reboot
    wp_enqueue_style('onews-style', get_template_directory_uri().'/css/style.css', ['onews-reboot']);
    wp_enqueue_style('onews-reboot', get_template_directory_uri().'/css/reboot.css');
}

// On associe la fonction onews_register_styles à l'action wp_enqueue_scripts
// Ça veut dire que lorsque WP exécute la fonction do_action('wp_enqueue_scripts'), ça exécute la fonction onews_register_styles
add_action('wp_enqueue_scripts', 'onews_register_styles');

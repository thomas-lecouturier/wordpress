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

function onews_after_setup_theme()
{
    // On demande à WP d'ajouter lui-mème la balise <title>
    add_theme_support( 'title-tag' );

    // Facultatif car on utilise ensuite register_nav_menus qui induit déjà la prise en charge de menus
    // Cette fonction déclare à WordPress que le thème prend en charge des menus
    add_theme_support( 'menus' );

    // On lui donne un tableau indexé avec en clé les noms des zones de menus et en valeurs leurs noms à afficher dans l'admin
    register_nav_menus([
        'footer' => 'Menu en bas à gauche du site',
    ]);
}

add_action('after_setup_theme', 'onews_after_setup_theme');

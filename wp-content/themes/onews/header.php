<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <div class="wrapper">
        <header id="welcome">
            <a href="<?php echo home_url(); ?>" id="welcome-logo"><?php bloginfo('name'); ?> <?php bloginfo('description'); ?></a>
            <div id="welcome-message">
                <h1>Latest news <span class="detail">from our students</span></h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam earum vero reiciendis molestiae corporis eveniet laborum quibusdam explicabo? Error sapiente quidem corporis mollitia rerum id.</p>
            </div>
            <?php wp_nav_menu([
                'theme_location' => 'footer', // On précise le nom d'emplcement du menu. C'est un nom normalement décidé dans functions.php
                'container' => 'nav', // Précise que le menu est dans une nav et pas dans une div
                'container_id' => 'menu',
            ]); ?>
        </header>
        <main id="content">

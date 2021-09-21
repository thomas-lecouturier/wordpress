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
            <nav id="menu">
                <a href="#">Plan du site</a>
                <a href="#">Mentions légales</a>
                <a href="#">Contact</a>
            </nav>
        </header>
        <main id="content">

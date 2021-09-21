<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>oNews</title>

    <!-- Reboot.css est un reset amélioré (avec des valeurs par défaut standardisées) https://getbootstrap.com/docs/4.1/content/reboot/ -->
    <link rel="stylesheet" href="<?= get_template_directory_uri() ?>/css/reboot.css">
    <!-- l'ordre des attributs dans une balise n'a pas d'importance -->
    <link href="<?= get_template_directory_uri() ?>/css/style.css" rel="stylesheet">
</head>
<body>
    <div class="wrapper">
        <!-- Emmet : header>a+h1+p+nav>a*3 -->
        <!-- https://docs.emmet.io/cheat-sheet/ -->
        <header id="welcome">
            <a href="index.html" id="welcome-logo">O'clock students news</a>
            <div id="welcome-message">
                <h1>Latest news <span class="detail">from our students</span></h1>
                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Veniam earum vero reiciendis molestiae corporis eveniet laborum quibusdam explicabo? Error sapiente quidem corporis mollitia rerum id.</p>
            </div>
            <!-- TODO corriger les liens quand on aura les autres pages --> 
            <nav id="menu">
                <a href="#">Plan du site</a>
                <a href="#">Mentions légales</a>
                <a href="#">Contact</a>
            </nav>
        </header>
        <main id="content">

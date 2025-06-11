<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Accueil Maquette</title>
    <link rel="stylesheet" href="./normalize.css" />
    <link rel="stylesheet" href="./sass/style.css" />
    <?= wp_head(); ?>
</head>

<body>
    <header class="entete">
        <div class="entete__contenu">
            <!--Source pour les svg: https://www.svgrepo.com/-->
            <!--             <picture>
                <img src="./image/logo.svg" alt="logo" class="entete__logo" />
            </picture> -->
            <figure class="entete__logo">
                <?php echo get_custom_logo(); ?>
            </figure>
            <label for="chk__menu" class="entete__burger">
                <img src="https://s2.svgbox.net/hero-outline.svg?ic=menu&color=000" width="32" height="32" />
            </label>
            <input type="checkbox" class="chk__menu" id="chk__menu" />
            <nav class="entete__nav">
                <!--                 <ul class="entete__menu">
                    <li class="entete__menu-item"><a href="#">Accueil</a></li>
                    <li class="entete__menu-item"><a href="#">Vol</a></li>
                    <li class="entete__menu-item"><a href="#">Croisière</a></li>
                    <li class="entete__menu-item"><a href="#">Hotel</a></li>
                    <li class="entete__menu-item"><a href="#">Train</a></li>
                    <li class="entete__menu-item"><a href="#">Groupes</a></li>
                    <li class="entete__menu-item"><a href="#">Aubaines</a></li>
                </ul> -->
                <?php wp_nav_menu(array(
                    "menu" => "principal",
                    'container'            => 'div',
                    'container_class'      => 'entete__nav',
                    'menu_class'           => 'entete__menu',
                )); ?>
                <form class="recherche" action="">
                    <input class="recherche__input" type="search" name="" id="" />
                    <button class="recherche__bouton">
                        <img src="https://s2.svgbox.net/hero-solid.svg?ic=search&color=000" width="32" height="32" />
                    </button>
                </form>
            </nav>
        </div>
    </header>
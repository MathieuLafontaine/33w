<?php //Le modele front-page permet d'afficher la page d'accueil
?>

<?php get_header(); ?>
<h1>------------Front-page.php--------------</h1>
<section class="hero">
    <div class="hero__contenu">
        <h1 class="hero__titre">Northern Hare-lines</h1>
        <p class="hero__description">
            Lorem, ipsum dolor sit amet consectetur adipisicing elit. Tenetur incidunt quas eius totam veniam, molestiae
            officiis cupiditate ut possimus tempore veritatis illum dignissimos, pariatur atque nulla architecto a natus
            voluptatibus!
        </p>
        <a href="#" class="bouton hero__bouton">Lorem</a>
        <picture class="hero__logo">
            <img src="/wp-content/themes/clubVoyage/image/facebook.svg" alt="logo-facebook" width="32" height="32" />
            <img src="/wp-content/themes/clubVoyage/image/instagram.svg" alt="logo-instagram" width="32" height="32" />
        </picture>
    </div>
</section>
<section class="contenu-principal">
    <!--Images trouvees sur Unsplash-->
    <section class="gallerie contenu-principal__conteneur">
        <h2 class="gallerie__titre">Sautez dans de nouvelles destinations!</h2>
        <section class="gallerie__conteneur">
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-alpes.jpg" alt="alpes" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-bermudes.jpg" alt="bermudes" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-croisiere.jpg" alt="croisiere" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-fiji.jpg" alt="fiji" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-irlande.jpg" alt="irlande" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-japon.jpg" alt="japon" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-mexique.jpg" alt="mexique" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="/wp-content/themes/clubVoyage/image/gallerie-rocheuses.jpg" alt="rocheuses" class="gallerie__image" />
            </picture>
        </section>
    </section>
    <!--     <section class="populaire contenu-principal__conteneur">
        <h2 class="populaire__titre">Sautez dans nos destinations les plus populaires!</h2>
        <section class="populaire__contenu">
            <picture class="populaire__image__conteneur"><img class="populaire__image" src="/wp-content/themes/clubVoyage/image/populaire.jpg" alt="image-populaire" /></picture>
            <p class="populaire__texte">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consectetur nihil tempora ullam, quaerat
                ratione quia aperiam incidunt libero autem nemo cum omnis. Quibusdam itaque neque dolorem, officiis maiores
                necessitatibus, laudantium, fugit ratione quam debitis nulla consequuntur.
            </p>
        </section>
    </section> -->

    <section class="populaire">
        <?php if (have_posts()) {
            while (have_posts()) {
                the_post(); ?>
        <?= the_content();
            }
        } ?>
        <article class="populaire__carte">
            <?php the_post_thumbnail('thumbnail'); ?>
            <h2><?php the_title(); ?></h2>
            <p>
                <?php
                /*cette fonction permet d'afficher l'ensemble du contenu du post the content*/
                $lien = "<a href=" . get_permalink() . ">suite</a>";
                echo wp_trim_words(get_the_excerpt(), 10, $lien); ?>
            </p>
        </article>
    </section>

    <section class="destinations contenu-principal__conteneur">
        <h1 class="destinations__titre"><?= the_title(); ?></h1>
        <?php if (have_posts()) {
            while (have_posts()) {
                (the_post()); ?>
                <h1><?= the_title(); ?></h1>
        <?= the_content();
            }
        } ?>
        <?php
        /*Cette fonction affiche l'entierete du <post></post>*/
        $lien = "<a href=" . get_permalink() . ">Suite</a>";
        wp_trim_words(get_the_excerpt(), 10, $lien);
        ?>
    </section>
</section>
<?php get_footer(); ?>
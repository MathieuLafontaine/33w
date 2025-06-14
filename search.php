<?php //Le modele front-page permet d'afficher la page d'accueil
?>

<?php get_header(); ?>
<h1>------------search.php--------------</h1>
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
    <div class="conteneur global">
        <?php if (have_posts()) {
            while (have_posts()) {
                /* affiche l'image « mise en avant » miniature */
                the_post();
                the_post_thumbnail('thumbnail');
        ?>
                <?php
                if (in_category('galerie')) {
                    get_template_part("gabarit/galerie");
                } else {
                    get_template_part("gabarit/carte");
                ?>


        <?php }
            }
        } ?>
    </div>
</section>
</section>
<?php get_footer(); ?>
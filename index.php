<?= get_header(); ?>
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
            <img src="./image/facebook.svg" alt="logo-facebook" width="32" height="32" />
            <img src="./image/instagram.svg" alt="logo-instagram" width="32" height="32" />
        </picture>
    </div>
</section>
<section class="contenu-principal">
    <!--Images trouvees sur Unsplash-->
    <section class="gallerie contenu-principal__conteneur">
        <h2 class="gallerie__titre">Sautez dans de nouvelles destinations!</h2>
        <section class="gallerie__conteneur">
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-alpes.jpg" alt="alpes" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-bermudes.jpg" alt="bermudes" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-croisiere.jpg" alt="croisiere" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-fiji.jpg" alt="fiji" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-irlande.jpg" alt="irlande" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-japon.jpg" alt="japon" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-mexique.jpg" alt="mexique" class="gallerie__image" />
            </picture>
            <picture class="gallerie__image__conteneur">
                <img src="./image/gallerie-rocheuses.jpg" alt="rocheuses" class="gallerie__image" />
            </picture>
        </section>
    </section>
    <section class="populaire contenu-principal__conteneur">
        <h2 class="populaire__titre">Sautez dans nos destinations les plus populaires!</h2>
        <section class="populaire__contenu">
            <picture class="populaire__image__conteneur"><img class="populaire__image" src="./image/populaire.jpg" alt="image-populaire" /></picture>
            <p class="populaire__texte">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Explicabo consectetur nihil tempora ullam, quaerat
                ratione quia aperiam incidunt libero autem nemo cum omnis. Quibusdam itaque neque dolorem, officiis maiores
                necessitatibus, laudantium, fugit ratione quam debitis nulla consequuntur.
            </p>
        </section>
    </section>
    <section class="destinations contenu-principal__conteneur">
        <h1 class="destinations__titre">Index des destinations</h1>
        <?php if (have_posts()):
            while (have_posts()): (the_post()); ?>
                <h1><?= the_title(); ?></h1>
        <?= the_content();
            endwhile;
        endif; ?>
    </section>
</section>
<?= get_footer(); ?>
<?php wp_footer(); ?>
<footer class="piedpage">
    <div class="global">
        <section class="piedpage__ligne-1">
            <div class="piedpage__lien">
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav"
                )) ?>
            </div>
            <div class="piedpage__adresse">
                <h2>Adresse et recherche</h2>
                <p>adresse</p>
                <?php get_search_form() ?>
            </div>

            <div class="piedpage__recherche"></div>
            <div class="piedpage__description"></div>
        </section>
        <section class="piedpage__ligne-2">
            <div class="piedpage__icone"></div>
        </section>

    </div>
    <p class="piedpage__droits">&copy;Tous droits réservés</p>
</footer>
<script src="script/checkbox.js"></script>
</body>
<?php wp_footer(); ?>

</html>
<footer class="piedpage">
    <div class="piedpage__container">
        <section class="piedpage__ligne">
            <div class="piedpage__nav-container">
                <h2>Liens sur les voyages</h2>
                <?php wp_nav_menu(array(
                    "menu" => "externe",
                    "container" => "nav",
                    "menu_class" => "piedpage__menu"
                )) ?>
            </div>
            <div class="piedpage__adresse">
                <h2>Adresse et recherche</h2>
                <p>122, rue de l'enigme, Saint-Brouillard, B0B 0B0</p>
                <p>555 555-5555</p>
                <p>example@fictif.com</p>
                <?php get_search_form() ?>
            </div>
            <div class="piedpage__description">
                <h2>Notre mission</h2>
                <p>Notre mission est d'inspirer et d'informer nos membres sur des destinations de voyage qui répondent à leurs attentes. Nous favorisons les échanges et le partage d’expériences à travers des activités sociales variées, telles que des rencontres, des conférences et des dîners.</p>
            </div>
        </section>
        <section class="piedpage__ligne">
            <div class="piedpage__icone">
                <?php
                get_template_part("gabarit/icone");
                ?>
            </div>
            <?php wp_nav_menu(array(
                "menu" => "externe",
                "container" => "nav",
                "menu_class" => "piedpage__menu piedpage__menu-principal"
            )) ?>
        </section>
    </div>
    <p class="piedpage__droits">&copy;Tous droits réservés</p>
</footer>
<?php wp_footer(); ?>
</body>

</html>
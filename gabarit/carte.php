<?php

/**
 * Template-part carte.php
 * Affiche une carte dans un conteneur flex
 */
$lien = "<a href=" . get_permalink() . ">Suite</a>";
?>
<article class="conteneur__carte">
    <?php the_post_thumbnail('miniature'); ?>
    <h2><?php the_title(); ?></h2>
    <p><?php echo wp_trim_words(get_the_excerpt(), 10, $lien); ?></p>
    <p>Température minimum <?php the_field('temperature_minimum'); ?></p>
    <p>Température maximum <?php the_field('temperature_maximum'); ?></p>
    <p>Température moyenne <?php the_field('temperature_moyenne'); ?></p>
    <?php the_category() ?>
</article>
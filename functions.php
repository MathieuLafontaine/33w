<?php

function mon_theme_supports()
{
    add_theme_support('post-thumbnails');
    add_theme_support('title-tag');
    add_theme_support('menus');
    add_theme_support('custom-logo', array(
        'height'      => 75,
        'width'       => 75,
        'flex-height' => true,
        'flex-width'  => true,
    ));
}
add_action('after_setup_theme', 'mon_theme_supports');

//hook permet d'assembler du code suite au code avant lequel hook est appeler

function theme_tp_enqueue_styles()
{
    //Ce hook s'active au load de la page
    wp_enqueue_style('normalize', get_template_directory_uri() . 'normalize.css');
    wp_enqueue_style('main-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'theme_tp_enqueue_styles');

function modifie_requete_principal($query)
{
    if ($query->is_home() && $query->is_main_query() && ! is_admin()) {
        $query->set('category_name', 'populaire');
        $query->set('orderby', 'title');
        $query->set('order', 'ASC');
    }
}
add_action('pre_get_posts', 'modifie_requete_principal');

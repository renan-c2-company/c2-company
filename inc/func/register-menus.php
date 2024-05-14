<?php 
/**
 * 
 * Registro de barras de navegação
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */

 function c2_register_menus(){

    register_nav_menus(
        array(
            'top'     => 'Navegação Superior',
            'side'    => 'Navegação Lateral',
            'primary' => 'Navegação Parte 1  Rodapé',
            'second'  => 'Navegação Parte 2 Rodapé',
            'third'   => 'Navegação Parte 3 Rodapé',
            'fourth'  => 'Navegação de Redes Sociais'
        )
    );
}

add_action( 'after_setup_theme', 'c2_register_menus' );

/**
 * Adiciona Classes a tag li para Barras de Navegação
 */
function c2_set_li_class( $classes, $item, $args ){

    $classes[] = 'nav-item';

    return $classes;

}

add_filter('nav_menu_css_class', 'c2_set_li_class', 1, 3);

/**
 * Adiciona Classes a tag âncora das Barras de Navegação
 */
function c2_add_link_atts( $atts ){

    $atts['class'] = "nav-link";

    return $atts;

}

add_filter( 'nav_menu_link_attributes', 'c2_add_link_atts');

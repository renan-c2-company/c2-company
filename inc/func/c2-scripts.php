<?php 
/**
 * 
 * Arquivo de call de scripts e styles próprios
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */

function c2_get_scripts(){

    // Arquivo js padrão do tema
    wp_enqueue_script( 'c2Script', get_template_directory_uri(). '/assets/js/company.js', array(), '1.0.0', true );

    // Arquivo CSS Padrão do tema
    wp_enqueue_style( 'c2Css', get_template_directory_uri() . '/assets/css/company.css', array(), '1.0.0', 'all' );

}

add_action( 'wp_enqueue_scripts', 'c2_get_scripts' );

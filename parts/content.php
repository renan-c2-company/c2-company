<?php 
/**
 * 
 * Corpo de página padrão
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */

if( is_page() || is_front_page() ):

    // The Loop
    if( have_posts() ):
        while( have_posts() ):
            the_post();
            the_content();
        endwhile;
    endif;

elseif( is_home() || is_category() || is_archive() ):

    // Inicia o corpo da página
    print '<!-- Corpo da página -->';
    print '<div class="container-fluid">';

        // Inicia o conteúdo principal
        print '<!-- Conteúdo Principal da Página -->';
        print '<main class="row">';

            // Inicia a seção principal
            print '<!-- Seção Principal -->';
            print '<section class="col-md-9">';
            print '</section>';
            print '<!-- Fim da Seção Principal -->';
            // Final da Seção Principal

            // Inicia a barra lateral
            print '<!-- Barra de navegação Lateral -->';
            print '<nav class="navbar-side">';

                if( has_nav_menu( 'side' ) ){
                    c2_get_component( 'nav', 'side' );
                }

            print '</nav>';
            print '<!-- Fim da Barra de Navegação Lateral';
            // Final da Barra de Navegação

        print '</main';
        print '<!-- Fim do Conteúdo Principal da Página -->';
        // Final do Conteúdo Principal

    print '</div>';
    print '<!-- Fim do corpo da página -->';
    // Final do corpo da página

elseif( is_search() ):

elseif( is_single() ):

elseif( is_404() ):

endif;
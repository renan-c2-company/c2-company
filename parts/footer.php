<?php 
/**
 * 
 * Rodapé de página padrão
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!-- Rodapé do Site -->
<footer class="container-fluid" role="complementary">
    <!-- Caixa de Barras de Navegação Complementar -->
    <div class="row">
        <?php 

        // Call para parte 1 da barra de navegação
        if( has_nav_menu( 'primary' ) ){
            c2_get_component( 'nav', 'primary' );
        }

        // Call para parte 2 da barra de navegação
        if( has_nav_menu( 'second' ) ){
            c2_get_component( 'nav', 'second' );
        }

        // Call para parte 3 da barra de navegação
        if( has_nav_menu( 'third' ) ){
            c2_get_component( 'nav', 'third' );
        }

        // Call para parte 4 da barra de navegação
        if( has_nav_menu( 'fourth' ) ){
            c2_get_component( 'card', 'fourth' );
        }
        ?>
    </div>
    <!-- Fim da Caixa de Barras de Navegação Complementar -->
    <!-- Caixa de Direitos Autorais -->
    <div class="row">
        <?php 
        // Call para card de copyriths
        c2_get_component( 'card', 'copy' );
        ?>
    </div>
    <!-- Fim da Caixa de Direitos Autorais -->
</footer>
<!-- Fim do Rodapé do Site -->

<?php 
/**
 * 
 * Barra de navegação quaternária do rodapé
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!-- Quarta Parte de Pavegação do Rodapé -->
<div class="col-md">
    <h4 class="nav-footer-title"></h4>
    <div class="social-navbar">
        <?php 
        // Call do menu de navegação
        if( has_nav_menu( 'fourth' ) ){
            wp_nav_menu(
                array(
                    'theme_location' => 'fourth',
                    'menu_class'     => '',
                    'container'      => false

                )
            );
        }
        ?>
    </div>
</div>
<!-- Fim da Quarta parte de Navegação do Rodapé -->

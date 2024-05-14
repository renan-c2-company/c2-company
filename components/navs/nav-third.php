<?php 
/**
 * 
 * Barra de navegação terciária do rodapé
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!-- Terceira Parte de Pavegação do Rodapé -->
<div class="col-md">
    <h4 class="nav-footer-title"></h4>
    <div class="nav-footer">
        <?php 
        // Call do menu de navegação
        if( has_nav_menu( 'third' ) ){
            wp_nav_menu(
                array(
                    'theme_location' => 'third',
                    'menu_class'     => '',
                    'container'      => false

                )
            );
        }
        ?>
    </div>
</div>
<!-- Fim da Terceira parte de Navegação do Rodapé -->

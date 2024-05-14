<?php 
/**
 * 
 * Barra de navegação secundária do rodapé
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!-- Segunda Parte de Pavegação do Rodapé -->
<div class="col-md">
    <h4 class="nav-footer-title"></h4>
    <div class="nav-footer">
        <?php 
        // Call do menu de navegação
        if( has_nav_menu( 'second' ) ){
            wp_nav_menu(
                array(
                    'theme_location' => 'second',
                    'menu_class'     => '',
                    'container'      => false

                )
            );
        }
        ?>
    </div>
</div>
<!-- Fim da Segunda parte de Navegação do Rodapé -->

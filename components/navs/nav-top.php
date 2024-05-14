<?php 
/**
 * 
 * Barra de navegação superior
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!-- Barra de navegação Superior -->
<nav class="navbar navbar-expand-md bg-c2-primary" role="navigation">
    <div class="" id="">
        <?php 
        if( has_nav_menu( 'top' ) ){
            wp_nav_menu(
                array(
                    'theme_location' => 'top',
                    'menu_class'     => '',
                    'container'      => false
                )
            );
        }
        ?>
    </div>
</nav>
<!-- Fim da Barra de Navegação Superior -->

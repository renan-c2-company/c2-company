<?php 
/**
 * 
 * Barra de navegação lateral
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!-- Barra de Navegação Lateral -->
<aside class="col-md-3">
    <h4 class="nav-side-title"></h4>
    <?php 
    if( has_nav_menu( 'side' ) ){
        wp_nav_menu(
            array(
                'theme_location' => 'side',
                'menu_class'     => '',
                'container'      => false
            )
        );
    }
    ?>
</aside>
<!-- Fim da Barra de Navegação lateral -->

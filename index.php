<?php 
/**
 * 
 * Arquivo inicial do tema, não exclua
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous"/>
        <script src="https://kit.fontawesome.com/595eb97298.js" crossorigin="anonymous"></script>
        <?php wp_head();?>
    </head>
    <body class="c2-body">
        <?php 
        c2_get_header();
        c2_get_content();
        c2_get_footer();
        wp_footer();
        ?>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>        
    </body>
</html>

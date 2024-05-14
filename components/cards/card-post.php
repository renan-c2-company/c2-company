<?php 
/**
 * 
 * Card para loop de posts
 * 
 * @package c2-company
 * @since 1.0.0
 * 
 */?>
<a href="<?php echo the_permalink();?>" class="card">
    <img src="<?php //Thumbnail link?>" alt="" class="c2-thumbnail card-img"/>
    <div class="card-body">
        <h2 class="card-title"><?php echo the_title();?></h2>
        <p class="card-text"><?php echo the_excerpt();?></p>
    </div>
</a>

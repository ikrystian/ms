<?php
    $img = get_template_directory_uri() . '/img/';
?>
<section class="president">
<div class="president__image">
    <img src="<?php the_field('image'); ?>" alt="">
</div>
    <div class="president__description">
        <?php the_field('content'); ?>
        <img class="president__signature" src="<?= $img; ?>signature.jpg" alt="">

    </div>

</section>
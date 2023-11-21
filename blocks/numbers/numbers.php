<?php
    $title = get_field('title');
?>
<section class="numbers">
    <h2 class="numbers__title"><?= $title; ?></h2>
    <div class="numbers__list">
        <?php while (have_rows('items')) : the_row(); ?>
        <div class="numbers__item">
            <span><?php the_sub_field('number'); ?></span>
            <span><?php the_sub_field('text'); ?></span>
        </div>
        <?php endwhile; ?>
    </div>
</section>
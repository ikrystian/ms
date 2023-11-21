<?php
$title = get_field('title');
?>
<section class="testimonials">
    <div class="testimonials__container">
        <div class="testimonials__title">
            <?= $title; ?>
        </div>
    </div>
    <div class="testimonials__list">
        <?php while (have_rows('items')) : the_row(); ?>
            <div class="testimonials__item" style="border-color: <?php the_sub_field('border_color'); ?>;">
                <section class="testimonials__content">
                    <div><?php the_sub_field('name'); ?></div>
                    <span><?php the_sub_field('company'); ?></span>
                    <p><?php the_sub_field('content'); ?></p>
                </section>
                <div class="testimonials__footer">
                    <img src="<?php the_sub_field('logo'); ?>" alt="">
                </div>
            </div>
        <?php endwhile; ?>
    </div>
</section>

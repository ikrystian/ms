<section class="services-home">
    <?php while (have_rows('service')): the_row(); ?>
        <div class="services-home__item">
            <a href="<?php echo get_sub_field('id'); ?>"></a>
            <img src="<?php echo get_template_directory_uri(); ?>/img/plus.png" class="services-home__icon" alt="">
            <div>
                <?php if (get_sub_field('icon')): ?>
                    <img src="<?php echo get_sub_field('icon'); ?>" alt="">
                <?php endif; ?>
                <?php echo get_sub_field('title'); ?>
                <p><?php echo get_sub_field('content'); ?></p>
            </div>
        </div>
    <?php endwhile; ?>
</section>

    <section class="check-our-offers">
        <h2 class="check-our-offers__title"><?php echo the_field('title'); ?></h2>
        <div class="check-our-offers-boxes">
            <?php while (have_rows('offers')): the_row(); ?>
                <a href="<?php the_sub_field('url'); ?>" class="check-our-offers-boxes__item">
                    <h2 class="check-our-offers-boxes__title"><?php the_sub_field('title'); ?></h2>
                    <span><?php the_sub_field('button'); ?></span>
                </a>
            <?php endwhile; ?>
        </div>
    </section>
<section class="logos" >
    <h2 class="logos__title"><?php echo the_field('title'); ?></h2>

    <div class="swiper">
        <?php if( have_rows('logos') ): ?>
            <div class="swiper-wrapper">
                <?php while( have_rows('logos') ): the_row(); 
                    $image = get_sub_field('logo_image'); ?>
                    <div class="swiper-slide">
                        <img src="<?php echo $image; ?>">
                    </div>
                <?php endwhile; ?>
            </div>
        <?php endif; ?>
    </div>
</section>
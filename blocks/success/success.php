<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
$image = get_field('image');
?>
<section class="success">
    <div class="success__container">
    <div class="success__title">
        <?= $title; ?>
        <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="123px" height="25px">
            <image  x="0px" y="0px" width="123px" height="25px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAAZCAMAAAAmJaEcAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA81BMVEUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyX///+bWGi0AAAAT3RSTlMAagT50UApt6ceUdz1ewn0uCrQjA/u5mIBFJb9xzYxw50XWe9yDIbVVO1sPM/7jxAZov7ALXHwWtP6pr0GdPPjV0OIHam5J3jhUtmECrYkEQRPSQAAAAFiS0dEUONuTLwAAAAHdElNRQfnBxgTATm4ZoaaAAAAuklEQVRIx8XVRxaCQBAE0IERJQgGFFHMijkgZkXMOcz9b+MBdE3Vsjf/dS26CQkmHB8Q9Cc0JMDscISJEkyXlaiqoXBNjSkybHVJZPEETBeSVE+hcJ5LGxkTpWdzVr6AwkmxZJUrKNysGrU67NDZDdpsEQZLG2h3MJV3e/3BECI7I3c8gcj8dGbMMddFWCx1GyI7K3eN+Sbext/uIDLZN+kBU/fxxM4XiOxd/dsdIhPyoM8XiCbvz+/sC3lcWolvl9cfAAAAAElFTkSuQmCC" />
        </svg>
    </div>
    <div class="success__subtitle">
        <?= $subtitle; ?>
    </div>
    </div>
        <div class="s-boxes">
            <img src="<?php echo get_template_directory_uri(); ?>/img/box-home-temp.jpg">
            <?php while (have_rows('items')) : the_row(); ?>
            <div class="s-boxes__item"><div><span><?php the_sub_field('number'); ?></span><?php the_sub_field('text'); ?></div></div>
            <?php endwhile; ?>
        </div>
</section>
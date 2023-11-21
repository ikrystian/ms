<?php
$title = get_field('title');
$subtitle = get_field('subtitle');
?>
<section class="work">
    <div class="work__title">
        <?= $title; ?>
        <svg
                xmlns="http://www.w3.org/2000/svg"
                xmlns:xlink="http://www.w3.org/1999/xlink"
                width="123px" height="25px">
            <image  x="0px" y="0px" width="123px" height="25px"  xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAAZCAMAAAAmJaEcAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA81BMVEUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyX///+bWGi0AAAAT3RSTlMAagT50UApt6ceUdz1ewn0uCrQjA/u5mIBFJb9xzYxw50XWe9yDIbVVO1sPM/7jxAZov7ALXHwWtP6pr0GdPPjV0OIHam5J3jhUtmECrYkEQRPSQAAAAFiS0dEUONuTLwAAAAHdElNRQfnBxgTATm4ZoaaAAAAuklEQVRIx8XVRxaCQBAE0IERJQgGFFHMijkgZkXMOcz9b+MBdE3Vsjf/dS26CQkmHB8Q9Cc0JMDscISJEkyXlaiqoXBNjSkybHVJZPEETBeSVE+hcJ5LGxkTpWdzVr6AwkmxZJUrKNysGrU67NDZDdpsEQZLG2h3MJV3e/3BECI7I3c8gcj8dGbMMddFWCx1GyI7K3eN+Sbext/uIDLZN+kBU/fxxM4XiOxd/dsdIhPyoM8XiCbvz+/sC3lcWolvl9cfAAAAAElFTkSuQmCC" />
        </svg>

        <div class="work__description">
            <p><strong>Sprawdź aktualne oferty
                    pracy</strong></p>
            <p>
                Poznaj nas i dołącz do naszego zespołu. Czeka na Ciebie wiele ciekawych ofert pracy.
            </p>
        </div>
    </div>
    <div class="work__subtitle">
        <?= $subtitle; ?>
    </div>
        <div class="work__list">
            <?php while (have_rows('items')) : the_row(); ?>
            <div class="person" style="background-color: <?php the_sub_field('background'); ?>;">
                <img src="<?php the_sub_field('image'); ?>" alt="" style="mix-blend-mode: multiply;">
                <a href="<?php the_sub_field('url'); ?>"></a>
                <span><?php the_sub_field('title'); ?></span>
            </div>
            <?php endwhile; ?>
        </div>
</section>
 
<?php
$img = get_template_directory_uri() . '/img/';
?>
<section class="positions-section">
    <h2 class="positions-section__title">Na jakie stanowiska najczęściej rekrutujemy</h2>
    <div class="positions">

<?php $counter = 1; if( have_rows('positions') ):  while( have_rows('positions') ): the_row(); ?>
    <div class="position" id="position-<?= $counter; ?>">
        <div class="position__content">
            <a href="https://msservices.olx.pl/" target="_blank"></a>
            <div class="position__title"><?php the_sub_field('title'); ?></div>
            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="123px" height="25px">
                <image x="0px" y="0px" width="123px" height="25px" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAAHsAAAAZCAMAAAAmJaEcAAAABGdBTUEAALGPC/xhBQAAACBjSFJNAAB6JgAAgIQAAPoAAACA6AAAdTAAAOpgAAA6mAAAF3CculE8AAAA81BMVEUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyUKAyX///+bWGi0AAAAT3RSTlMAagT50UApt6ceUdz1ewn0uCrQjA/u5mIBFJb9xzYxw50XWe9yDIbVVO1sPM/7jxAZov7ALXHwWtP6pr0GdPPjV0OIHam5J3jhUtmECrYkEQRPSQAAAAFiS0dEUONuTLwAAAAHdElNRQfnBxgTATm4ZoaaAAAAuklEQVRIx8XVRxaCQBAE0IERJQgGFFHMijkgZkXMOcz9b+MBdE3Vsjf/dS26CQkmHB8Q9Cc0JMDscISJEkyXlaiqoXBNjSkybHVJZPEETBeSVE+hcJ5LGxkTpWdzVr6AwkmxZJUrKNysGrU67NDZDdpsEQZLG2h3MJV3e/3BECI7I3c8gcj8dGbMMddFWCx1GyI7K3eN+Sbext/uIDLZN+kBU/fxxM4XiOxd/dsdIhPyoM8XiCbvz+/sC3lcWolvl9cfAAAAAElFTkSuQmCC"></image>
            </svg>
            <?php the_sub_field('content'); ?>
            <img src="<?= $img; ?>position-info.png" alt="">
        </div>
        <div class="position__person">
            <img src="<?php the_sub_field('image'); ?>" alt="">
            <div class="position__description">
               <?php the_sub_field('description'); ?>
            </div>
        </div>
    </div>
    <?php $counter++; endwhile; endif;
    $el = get_field('last_list_element');
    ?>

    <div class="position">
    <div class="position__content">
        <div class="position__title">  <?php echo $el['title']; ?></div>
        <div class="meet-section">
            <?php echo $el['content']; ?>
        </div>
    </div>
    <div class="position__person">
        <img src="<?php echo esc_url($el['image']); ?>" alt="">
    </div>
    </div>
    </div>
</section>

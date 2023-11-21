<?php
$img = get_template_directory_uri() . '/img/';

if(have_rows('uslugi')):
    while( have_rows('uslugi') ) : the_row();
        $sectionId = get_sub_field('id');
        $mainNumber = get_sub_field('glowny_numer');
        $title = get_sub_field('tytul', false, false);
        $mainDescription = get_sub_field('glowny_opis');
?>
<section class="services" id="<?= $sectionId; ?>">
    <div class="services__description">
        <h2><span class="number"><?= $mainNumber; ?></span><span class="title"><?= $title; ?></span></h2>
        <div class="services__introduction">
            <?= $mainDescription; ?>
        </div>
    </div>

    <div class="services__content"> 

        <div class="services-featured">
            
            <?php for($i = 1; $i <= 6; $i++) { 
                $images = get_sub_field('galeria_'.$i); 
                $sectionImage = get_sub_field('obrazek_sekcji_'.$i);
                $sectionTitle = get_sub_field('tytul_sekcji_'.$i);
                $sectionContent = get_sub_field('tresc_sekcji_'.$i);
                
        ?>
        
                <div class="services-featured__item">
                    <?php if($sectionTitle): ?>
                    <div class="services-featured__image <?php if($images) { echo 'services-featured__image--gallery'; } ?>">
                        <span>Zobacz galerię<br><?= $sectionTitle; ?></span>
                        <img src="<?= $sectionImage; ?>" alt=""> 
                    </div> 
                    <div class="services-featured__content">
                        <div class="services-featured__title">
                            <h2><span class="number">0<?= $i ?></span><span class="title"><?= $sectionTitle; ?></span></h2>
                        </div>
                        <?= $sectionContent; ?>
                    </div>

                    <?php 
                    if( $images ): 

                    ?> 
                        <div class="gallery">
                            <div style="position: relative;">
                            <button class="close-gallery">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 384 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                            </button>
                            <div class="ga">
                            <?php foreach( $images as $image ): ?>
                                <div class="gallery__item">
                                         <img src="<?php echo $image; ?>" />
                                </div>
                            <?php endforeach; ?>    
                            </div>
                            </div>
                        </div>
                    <?php endif; ?>
                    <?php endif; ?>
                </div>

                
            <?php } ?>

        </div>

        <!-- banner -->
        <?php 
        $quote = get_sub_field('cytat');
        $quoteBackground = get_sub_field('cytat_tlo');
        if($quote) : ?>
        <div class="services-banner" style="background-image: url('<?= $quoteBackground; ?>');">
            <?= $quote; ?>
        </div>
        <?php endif; ?>

        <?php 
        $case = get_sub_field('case');
        if($case): ?> 
            <?php the_sub_field('case'); ?>
        <?php endif; ?>
      

</section>
<?php endwhile; ?>
<?php endif; ?>

<article class="blog-post">
   <?php if ( has_post_thumbnail() ) : ?>
       <figure class="post-thumbnail">
           <?php the_post_thumbnail(); ?>
       </figure>
   <?php endif; ?>

   <h<?php echo is_single() ? '1' : '2'; ?> class="post-title"><?php the_title(); ?></h<?php echo is_single() ? '1' : '2'; ?>>

   <?php if(is_single()) : ?>
       <div class="post-meta">
           <div class="post-date">
               <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M464 256A208 208 0 1 1 48 256a208 208 0 1 1 416 0zM0 256a256 256 0 1 0 512 0A256 256 0 1 0 0 256zM232 120V256c0 8 4 15.5 10.7 20l96 64c11 7.4 25.9 4.4 33.3-6.7s4.4-25.9-6.7-33.3L280 243.2V120c0-13.3-10.7-24-24-24s-24 10.7-24 24z"/></svg>    
               <span><?php echo get_the_date(); ?></span>
           </div>
           <div class="post-author">
               <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 448 512"><!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. --><path d="M304 128a80 80 0 1 0 -160 0 80 80 0 1 0 160 0zM96 128a128 128 0 1 1 256 0A128 128 0 1 1 96 128zM49.3 464H398.7c-8.9-63.3-63.3-112-129-112H178.3c-65.7 0-120.1 48.7-129 112zM0 482.3C0 383.8 79.8 304 178.3 304h91.4C368.2 304 448 383.8 448 482.3c0 16.4-13.3 29.7-29.7 29.7H29.7C13.3 512 0 498.7 0 482.3z"/></svg> 
               <span><?php the_author(); ?></span>
           </div>
       </div>
   <?php endif; ?>
   <div class="blog-c">
       <?php echo is_single() ? the_content() : the_excerpt(); ?>
   </div>

   <a class="blog-post__read-more" href="<?php the_permalink(); ?>">Czytaj całość</a>

   <?php if(is_single()) : ?>
       <footer class="blog-post__footer">
           <div class="author-info">
               <div class="author-avatar">
                   <?php echo get_avatar( get_the_author_meta( 'ID' ), 60 ); ?>
               </div>
               <div class="author-name">
                   <?php the_author_meta( 'nickname' ); ?>
               </div>
           </div>
       </footer>
   <?php endif; ?>

</article>


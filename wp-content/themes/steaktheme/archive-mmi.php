<?php get_header(); ?>

<div class="warp_cards">
    <?php if (have_posts()) : ?>
       <?php while (have_posts()) : the_post(); ?>
            <article class="cards_equipe">
            <?php the_post_thumbnail( 'thumbnail' ); ?>
            <div class="">
                 <h3 class="title">
                 <a href="<?php the_permalink(); ?>">
                 <?php the_title(); ?></h3>
                 <p class="description">voir le projet</p>
                 </a>
                
            </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
 </div>
 <?php get_footer(); ?>
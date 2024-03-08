<?php
/*
Template Name: apropos
*/

get_header();
?>
    <div class="">
    <?php if (have_posts()) : ?>
        <?php $count = 0; ?>
        <?php while (have_posts()) : the_post(); ?>
            <div class="post">
                <?php if ($count % 3 == 0) : ?>
                    <h2 class="title font-Paytone text-2xl"><?php the_title(); ?></h2>
                <?php elseif ($count % 3 == 1) : ?>
                    <h2 class="font-Paytone"><?php the_title(); ?></h2>
                <?php else : ?>
                    <img src="<?php echo esc_url(get_the_post_thumbnail_url(get_the_ID(), 'large')); ?>" alt="<?php the_title(); ?>" class="post-image">
                <?php endif; ?>
                <div class="post-content">
                    <?php
                    // Récupérer le contenu du post (texte)
                    the_content();
                    ?>
                </div>
            </div>
            <?php $count++; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<div class="article-container">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) : the_post(); ?>
            <article>
                <h1 class="title"><?php the_title(); ?></h1>
                <h2 class="subtitle"><?php the_title(); ?></h2>
                <h2 class="subtitle"><?php the_title(); ?></h2>

                <div class="paragraph-and-image">
                </div>

                <h2 class="subtitle"><?php the_title(); ?></h2>

                <div class="software-icons">
                    <!-- Ajoutez vos icônes de logiciels ici -->
                </div>

                <img src="" alt="Grande Image" class="large-image">

                <div class="social-icons">
                    <!-- Ajoutez vos icônes de réseaux sociaux ici -->
                </div>
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<?php get_footer(); ?>
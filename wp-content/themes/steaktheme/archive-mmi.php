<?php get_header(); ?>
<div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 py-10 sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
    <div class="">
        <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php
                                                                                                                                        echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
        <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php
                                                                                                                                                                echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php
                                                                                                                                                                echo wp_get_attachment_url(17); ?>" alt="cercle jaune blur" />
    </div>
    <div class="z-40 flex flex-row-reverse md:grid md:grid-cols-1 gap-[5rem] justify-items-center items-center pt-[50px] md:py-[2rem]">
        <a href="https://www.behance.net/kiwwii_kawaii" target="_blank">
            <img class="md:w-[185px] shadowbulle" src="<?php
                                                        echo wp_get_attachment_url(93); ?>" alt="icone behance" /></a>
        <div>
            <p class="text-gris text-[2rem] font-Paytone md:text-[22px] sm:text-[1rem] z-40">Aspirante graphiste voici
                mes meilleurs travaux réalisés lors de mon BUT MMI</p>
        </div>
    </div>
</div>


<div class="grid grid-cols-3 md:grid-cols-1 sm:grid-cols-1 border border-gray-300 gap-0 m-0 p-0">
    <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
            the_post(); ?>
            <article class="border border-gray-300">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?> </a>
                <!-- <div class="">
                    <h3 class="title">
                        
                            <?php the_title(); ?>
                    </h3>
                    <p class="description">voir le projet</p>
                    

                </div> -->
            </article>
        <?php endwhile; ?>
    <?php endif; ?>
</div>

<!-- <div class="">
    <?php
    $taxonomy = 'articlemmi';
    // $term_slug = 'articlesmmi';  // Remplacez 'animation' par le slug du terme que vous souhaitez afficher

    // // Récupérez l'ID du terme en utilisant son slug
    // $term = get_term_by('slug', $term_slug, $taxonomy);
    // $term_id = $term->term_id;

    // Construisez la requête pour récupérer les articles liés à la taxonomie spécifiée
    $args = array(
        'post_type' => 'post',  // Assurez-vous que 'post' est le type de publication que vous recherchez
        'tax_query' => array(
            array(
                'taxonomy' => $taxonomy,
                'field' => 'term_id',
                'terms' => $term_id,
            ),
        ),
    );

    $query = new WP_Query($args);

    // La boucle WordPress
    if ($query->have_posts()) :
        while ($query->have_posts()) : $query->the_post();
    ?>
            <article class="">
                <?php the_post_thumbnail('thumbnail'); ?>
                <div class="">
                    <h3 class="title">
                        <a href="<?php the_permalink(); ?>">
                            <?php the_title(); ?>
                        </a>
                    </h3>
                    <p class="description">voir le projet</p>
                </div>
            </article>
            <?php
        endwhile;
        wp_reset_postdata(); // Réinitialisez les données du post
    else :
        echo 'Aucun article trouvé.';
    endif;
            ?>
</div> -->


<?php get_footer(); ?>
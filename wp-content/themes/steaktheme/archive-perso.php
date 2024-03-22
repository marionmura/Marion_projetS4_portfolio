<?php get_header(); ?>

<div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 pt-10 pb-[10rem] md:pb-[5rem] sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
    <div class="">
        <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
        <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[180px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php echo wp_get_attachment_url(17); ?>" alt="cercle jaune blur" />
    </div>
    <div class="z-40 flex flex-row-reverse md:grid md:grid-cols-1 gap-[5rem] justify-items-center items-center pt-[50px] md:py-[2rem]">
        <a href="https://www.instagram.com/steakosaure.png" target="_blank">
            <img class="md:w-[185px] shadowbulle" src="<?php echo wp_get_attachment_url(91); ?>" alt="icone behance" /></a>
        <div>
            <p class="text-gris text-[2rem] font-Paytone md:text-[22px] sm:text-[1rem] z-40">Pendant mon temps perso je dessine c'est cadeau</p>
        </div>
    </div>
</div>


<div class="grid grid-cols-3 md:grid-cols-1 sm:grid-cols-1  gap-0 m-0 p-0">
    <!-- <?php if (have_posts()) : ?>
        <?php while (have_posts()) :
                    the_post(); ?>
            // à ajouter dans article et div plus haut border border-gray-300 pour voir la grid 
            <article class=" ">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail('large'); ?> </a>
                <div class="">
                    <h3 class="title">
                        
                            <?php the_title(); ?>
                    </h3>
                    <p class="description">voir le projet</p>
                    

                </div> 
            </article> // boucle pour récup tous les articles
            // on va mettre en triant par type d'articles visuellement - tout design puis tout animation puis tout ce qui reste s'il y a d'autre cat
        <?php endwhile; ?>
    <?php endif; ?> -->



    <!-- afficher les articles sur l'animation -->
    <?php echo '<br/>';

    $cat_taxonomie = 'projetsperso';
    $args = array(
        'showposts' => '3',
        'tax_query' => array(
            array(
                'taxonomy' => $cat_taxonomie,
                'field'    => 'slug',
                'terms'    => array('pokemon')

            )
        ),
    );
    $the_query = new WP_query($args);

    if ($the_query->have_posts()) {
        while ($the_query->have_posts()) {
            $the_query->the_post();
            echo '<a href="' . get_permalink() . '">';
            the_post_thumbnail('large');
            the_title();
            echo '</a>';
        }
    }
    wp_reset_postdata();

    // afficher les articles sur mes bd
    $args2 = array(
        'showposts' => '3',
        'tax_query' => array(
            array(
                'taxonomy' => $cat_taxonomie,
                'field'    => 'slug',
                'terms'    => array('bd')

            )
        ),
    );

    $the_query2 = new WP_query($args2);

    if ($the_query2->have_posts()) {
        while ($the_query2->have_posts()) {
            $the_query2->the_post();
            echo '<a href="' . get_permalink() . '">';
            the_post_thumbnail('large');
            the_title();

            echo '</a>';
        }
    }
    wp_reset_postdata();
    ?>

</div>


<?php

get_footer(); ?>
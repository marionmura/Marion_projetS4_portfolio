<?php get_header(); ?>

<div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 pt-10 pb-[10rem] md:pb-[5rem] sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
    <div class="">
        <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
        <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[180px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php echo wp_get_attachment_url(17); ?>" alt="cercle jaune blur" />
    </div>
    <div class="z-40 flex flex-row-reverse md:grid md:grid-cols-1 gap-[5rem] justify-items-center items-center pt-[50px] md:py-[2rem]">
        <a href="https://www.behance.net/kiwwii_kawaii" target="_blank">
            <img class="md:w-[185px] shadowbulle" src="<?php echo wp_get_attachment_url(93); ?>" alt="icone behance" /></a>
        <div>
            <p class="text-gris text-[2rem] font-Paytone md:text-[22px] sm:text-[1rem] z-40">Aspirante graphiste voici mes meilleurs travaux réalisés en BUT MMI</p>
        </div>
    </div>
</div>

<!-- ancienne classe grille de 3 responsive class="grid grid-cols-3 md:grid-cols-1 sm:grid-cols-1  gap-0 m-0 p-0" -->
<div class="">

    <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] text-transparent strokehomepage-motiondesign sm:text-[40px] md:text-[3rem]">Motion design</h1>

    </div>

    <div class="grid grid-cols-2 md:grid-cols-1 gap-2 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher les articles sur l'animation -->
        <?php

        $cat_taxonomie = 'articlemmi';
        $args = array(
            'showposts' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => $cat_taxonomie,
                    'field'    => 'slug',
                    'terms'    => array('animation')

                )
            ),
        );
        $the_query = new WP_query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-2 sm:grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[85%] lg:w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('date_du_projet');
                echo '</p><p>';
                the_field('petit_resume');

                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

    <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] grid text-transparent strokehomepage-graphisme sm:text-[40px] md:text-[3rem]">Graphisme</h1>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-1 gap-2 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher les articles en graphisme -->
        <?php

        $cat_taxonomie = 'articlemmi';
        $args = array(
            'showposts' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => $cat_taxonomie,
                    'field'    => 'slug',
                    'terms'    => array('graphisme')

                )
            ),
        );
        $the_query = new WP_query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-2 sm:grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[85%] lg:w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('date_du_projet');
                echo '</p><p>';
                the_field('petit_resume');

                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

    <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] grid text-transparent strokehomepage-webdesign sm:text-[40px] md:text-[3rem]">Web design</h1>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-1 gap-2 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher les articles sur en design -->
        <?php

        $cat_taxonomie = 'articlemmi';
        $args = array(
            'showposts' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => $cat_taxonomie,
                    'field'    => 'slug',
                    'terms'    => array('design')

                )
            ),
        );
        $the_query = new WP_query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-2 sm:grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[85%] lg:w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('date_du_projet');
                echo '</p><p>';
                the_field('petit_resume');

                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

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
</div>


<?php

get_footer(); ?>
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
            <p class="text-gris text-[2rem] font-Paytone md:text-[22px] sm:text-[1rem] z-40">Sélection de mes dessins favoris @steakosaure.png</p>
        </div>
    </div>
</div>


<div class="">
     <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] grid text-transparent strokehomepage-graphisme sm:text-[40px] md:text-[3rem]">Challenges</h1>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-2 md:gap-8 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher mes challenges ! -->
        <?php

        $cat_taxonomie = 'projetsperso';
        $args = array(
            'showposts' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => $cat_taxonomie,
                    'field'    => 'slug',
                    'terms'    => array('challenges')

                )
            ),
        );
        $the_query = new WP_query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('datep');
                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

    <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] grid text-transparent strokehomepage-webdesign sm:text-[40px] md:text-[3rem]">BD</h1>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-2 md:gap-8 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher process sur ma petite BD -->
        <?php

        $cat_taxonomie = 'projetsperso';
        $args = array(
            'showposts' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => $cat_taxonomie,
                    'field'    => 'slug',
                    'terms'    => array('BD')

                )
            ),
        );
        $the_query = new WP_query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('datep');
                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

    <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] grid text-transparent strokehomepage-motiondesign sm:text-[40px] md:text-[3rem]">Sky - Children of the Light</h1>
    </div>

    <div class="grid grid-cols-2 md:grid-cols-2 sm:grid-cols-1 gap-2 md:gap-8 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher fanarts de sky -->
        <?php

        $cat_taxonomie = 'projetsperso';
        $args = array(
            'showposts' => '6',
            'tax_query' => array(
                array(
                    'taxonomy' => $cat_taxonomie,
                    'field'    => 'slug',
                    'terms'    => array('sky')

                )
            ),
        );
        $the_query = new WP_query($args);

        if ($the_query->have_posts()) {
            while ($the_query->have_posts()) {
                $the_query->the_post();
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('datep');

                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

    <div class="grid justify-items-start mx-[12rem] lg:mx-[8rem] md:mx-[2rem] sm:mx[1rem] py-[4rem]">
        <h1 class="text-[5rem] grid text-transparent strokehomepage-graphisme sm:text-[40px] md:text-[3rem]">Pokemon - fanarts</h1>
    </div>

    <div class="grid grid-cols-3 md:grid-cols-2 sm:grid-cols-1 gap-2 md:gap-8 mx-[8rem] lg:mx-[6rem] md:mx-[2rem] sm:mx[1rem] pb-[4rem]">
        <!-- afficher Pokemon -->
        <?php

        $cat_taxonomie = 'projetsperso';
        $args = array(
            'showposts' => '6',
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
                echo '<a href="' . get_permalink() . '">
            <div class="grid grid-cols-1 gap-2">';
                the_post_thumbnail('large');
                echo '<div class=""><h3>';
                the_title();


                echo '</h3>
            <span class="block justify-items-center w-[100%] h-[2px]  bg-gris"></span>
            <p class="py-2 pb-2">';
                the_field('datep');
                echo '</p></div>
            </div>
            </a>';
            }
        }
        wp_reset_postdata(); ?>
    </div>

</div>


<?php

get_footer(); ?>
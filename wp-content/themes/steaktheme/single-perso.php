<?php get_header(); ?>
<?php if (have_posts()): ?>

    <?php while (have_posts()):
        the_post(); ?>
        <article class="text-gris sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
            <div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 py-10">
                <div class="">
                    <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] "
                        src="<?php
                        echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
                    <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]"
                        src="<?php
                        echo wp_get_attachment_url(18); ?>" alt="cercle orange blur" />
                    <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden"
                        src="<?php
                        echo wp_get_attachment_url(17); ?>" alt="cercle vert blur" />
                </div>

                <div
                    class="z-40 grid grid-cols-1 md:grid-cols-1 gap-[2rem] justify-items-center items-center pt-[50px] md:py-[2rem]">
                    <div>
                        <h1 class=" text-[4rem]  md:text-2xl sm:text-[2rem] pb-5">
                            <?php the_title(); ?>
                        </h1>
                        <h3>
                            <?php the_field('date_du_projet'); ?>
                        </h3>
                    </div>
                    
                </div>
            </div>

            <!-- //résumé article -->
            <h2 class="z-40 text-[2rem] pb-5 md:text-2xl sm:text-[2rem]">
                <?php the_field('h1_article'); ?>
            </h2>

            <div class="z-40 mb-[2rem] grid grid-cols-1 justify-items-center content-between ">

                <div class="grid grid-cols-2 md:grid-cols-1 gap-[2rem] sm:gap-[4rem]  mb-[4rem] items-start">

                    <div class="">
                        <?php the_field('titre_galerie'); ?>
                        <?php the_field('resume'); ?>
                    </div>
                    <div class="">
                        <?php $image_id = get_field('img1'); ?>
                        <!-- // Récupérer l'ID de l'image -->
                        <?php if ($image_id): ?>
                            <img class="w-[25rem]" src="<?php echo wp_get_attachment_url($image_id); ?>" alt="img" />
                        <?php endif; ?>

                    </div>
                </div>
            </div>
    </article>
<?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
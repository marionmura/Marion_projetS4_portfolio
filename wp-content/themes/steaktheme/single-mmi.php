<?php get_header(); ?>
<?php if (have_posts()): ?>

    <?php while (have_posts()):
        the_post(); ?>
        <article class="text-gris">
            <h1 class=" text-[6rem]  md:text-2xl sm:text-[2rem]">
                <?php the_title(); ?>
            </h1>
            <h3>
                <?php the_field('date_du_projet'); ?>
            </h3>
            <div class="">
                <?php $term_image = get_field('photo'); ?>
                <img class="img-article" src="<?php echo esc_url($term_image); ?>" alt="image">
            </div>

            <div class="mb-[2rem] grid grid-cols-1 justify-items-center mx-[4rem]">

                <div class="">
                    <h2 class="text-[2rem]  md:text-2xl sm:text-[2rem]">
                        <?php the_field('h1_article'); ?>
                    </h2>


                    <div >
                        <?php the_field('p_resume'); ?>
                        <div class="grid grid-cols-2">
                        <?php $image_id = get_field('logo_du_projet'); ?>
                            // Récupérer l'ID de l'image

                        <img class="" src="<?php echo wp_get_attachment_url($image_id); ?>" alt="banniere" />
                            <?php the_field('logo_du_projet'); ?>
                            <img class="img-article" src="<?php echo esc_url($term_image); ?>" alt="image">
                        </div>
                        

                        <div>
                            <?php the_field('h2-outils_utilises'); ?>
                        </div>

                        <div>
                            <?php the_field('h2-etapes_de_creation'); ?>
                            <?php the_field('h3-croquis'); ?>

                            <div>
                                <?php the_field('p-h3'); ?>
                                <img class="img1-h3" src="<?php echo esc_url($term_image); ?>" alt="image">
                                <?php the_field('p2-h3'); ?>
                                <img class="img2-h3" src="<?php echo esc_url($term_image); ?>" alt="image">
                            </div>

                            <div>
                                <?php the_field('h3-creation'); ?>
                                <?php the_field('p-h3creation'); ?>
                                <img class="img-h3creation" src="<?php echo esc_url($term_image); ?>" alt="image">

                                <div>
                                    <?php the_field('Behance'); ?>
                                    <?php the_field('Instagram'); ?>
                                    <?php the_field('Youtube'); ?>

                                </div>
                            </div>

                        </div>
                    </div>

                </div>
            </div>

        </article>
    <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>
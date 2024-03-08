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
                <?php the_post_thumbnail('thumbnail'); ?>
                <!-- image mise en avant servant de logo -->
            </div>

            <div class="mb-[2rem] grid grid-cols-1 justify-items-center mx-[4rem]">

                <div class="">
                    <h2 class="text-[2rem]  md:text-2xl sm:text-[2rem]">
                        <?php the_field('h1_article'); ?>
                    </h2>


                    <div class="grid grid-cols-2">
                        <?php the_field('p_resume'); ?>

                        <div>
                            <?php $image_id = get_field('logo_du_projet'); ?>
                            <!-- // Récupérer l'ID de l'image -->

                            <img class="img-article" src="<?php echo wp_get_attachment_url($image_id); ?>" alt="img" />
                        </div>
                    </div>


                    <div>
                        <h2>
                            <?php the_field('h2-outils_utilises'); ?>
                        </h2>
                    </div>

                    <div>
                        <h2>
                            <?php the_field('h2-etapes_de_creation'); ?>
                        </h2>
                        <h3>
                            <?php the_field('h3-croquis'); ?>
                        </h3>

                        <div class="grid grid-cols-2 gap-2">
                            <div>
                                <?php the_field('p-h3'); ?>

                                <div class="w-[12rem]">
                                    <?php $image2_id = get_field('img1-h3'); ?>
                                    <img class="w-[12rem]" src="<?php echo wp_get_attachment_url($image2_id); ?>" alt="img" />
                                </div>
                            </div>
                            <div>
                                <?php the_field('p2-h3'); ?>
                                <div>
                                    <?php $image3_id = get_field('img2-h3'); ?>
                                    <img class="" src="<?php echo wp_get_attachment_url($image3_id); ?>" alt="img" />
                                </div>
                            </div>
                        </div>

                        <div>
                            <h3>
                                <?php the_field('h3-creation'); ?>
                            </h3>
                            <div class="grid grid-cols-2 gap-2">
                                <div>
                                    <?php the_field('p-h3creation'); ?>
                                    <div>
                                        <?php $image4_id = get_field('img-h3creation'); ?>
                                        <img class="" src="<?php echo wp_get_attachment_url($image4_id); ?>" alt="img" />
                                    </div>
                                </div>
                                <div>
                                    <div class="grid grid-cols-3">
                                        <a href="<?php the_field('behance'); ?>">Behance</a>
                                        <a href="<?php the_field('instagram'); ?>">Instagram</a>
                                        <a href="<?php the_field('youtube'); ?>">Youtube</a>
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
<?php get_header(); ?>
<?php if (have_posts()): ?>

    <?php while (have_posts()):
        the_post(); ?>
        <article class="text-gris mx-[4rem]">
            <div class="grid grid-cols-2 gap-[2rem] justify-items-center items-center py-[8rem]">
                <div>
                    <h1 class=" text-[4rem]  md:text-2xl sm:text-[2rem] pb-5">
                        <?php the_title(); ?>
                    </h1>
                    <h3>
                        <?php the_field('date_du_projet'); ?>
                    </h3>
                </div>
                <div class="">
                    <?php $term_image = get_field('photo'); ?>
                    <?php the_post_thumbnail('thumbnail'); ?>
                    <!-- image mise en avant servant de logo -->
                </div>
            </div>
            <h2 class="text-[2rem] mx-[4rem] pb-5 md:text-2xl sm:text-[2rem]">
                <?php the_field('h1_article'); ?>
            </h2>
            <div class="mb-[2rem] grid grid-cols-1 justify-items-center content-between mx-[4rem]">

                <div class="grid grid-cols-2 gap-[2rem] items-start">

                    <div class="">
                        <?php the_field('p_resume'); ?>
                    </div>
                    <div>
                        <?php $image_id = get_field('logo_du_projet'); ?>
                        <!-- // Récupérer l'ID de l'image -->

                        <img class="w-max" src="<?php echo wp_get_attachment_url($image_id); ?>" alt="img" />
                    </div>
                </div>


                <div class="grid items-start py-[8rem]">
                    <h2>
                        <?php the_field('h2-outils_utilises'); ?>
                    </h2>
                    <?php the_field('logiciels'); ?>

                    <?php
                    // Récupérer les termes associés à l'article que si cest une taxonomie
                    // $terms = get_the_terms(get_the_ID(), 'logiciels');
            
                    // if ($terms && !is_wp_error($terms)) {
                    //     foreach ($terms as $term) {
                    //         // Vérifier le nom du terme (logiciel) et afficher l'icône correspondante
                    //         if ($term->name === 'Pinterest') {
                    //             // Afficher l'icône pour Illustrator (ajustez le chemin de l'image en conséquence)
                    //             $image_url = wp_get_attachment_image_url(36, 'thumbnail');
            
                    //             echo '<img src="' . esc_url($image_url) . '" alt="Pinterest Icon">';
                    //         } elseif ($term->name === 'Figma') {
                    //             // Afficher l'icône pour Figma (ajustez le chemin de l'image en conséquence)
                    //             $image2_url = wp_get_attachment_image_url(33, 'thumbnail');
                    //             echo '<img src="' . esc_url($image2_url) . '" alt="Figma Icon">';
                    //         }
                    //         // Ajoutez d'autres conditions pour d'autres logiciels si nécessaire
                    //     }
                    // }

                    // Récupérer les valeurs des cases à cocher (remplacez 'logiciels' par le nom correct de votre champ personnalisé)
                    $logiciels = get_post_meta(get_the_ID(), 'logiciels', true);

                    // Vérifier les valeurs et afficher les icônes correspondantes
                    if (in_array('Adobe Photoshop', $logiciels)) {
                        // Afficher l'icône pour Pinterest
                        echo '<img src="' . esc_url(wp_get_attachment_image_url(84, 'thumbnail')) . '" alt="Photoshop Icon">';
                    }

                    if (in_array('Adobe Illustrator', $logiciels)) {
                        // Afficher l'icône pour Pinterest
                        echo '<img src="' . esc_url(wp_get_attachment_image_url(79, 'thumbnail')) . '" alt="Illustrator Icon">';
                    }

                    if (in_array('Adobe In design', $logiciels)) {
                        // Afficher l'icône pour Pinterest
                        echo '<img src="' . esc_url(wp_get_attachment_image_url(83, 'thumbnail')) . '" alt="In Design Icon">';
                    }
                    if (in_array('After Effect', $logiciels)) {
                        // Afficher l'icône pour Pinterest
                        echo '<img src="' . esc_url(wp_get_attachment_image_url(78, 'thumbnail')) . '" alt="After Effect Icon">';
                    }

                    if (in_array('Figma', $logiciels)) {
                        // Afficher l'icône pour Figma
                        echo '<img src="' . esc_url(wp_get_attachment_image_url(82, 'thumbnail')) . '" alt="Figma Icon">';
                    }

                    if (in_array('Pinterest', $logiciels)) {
                        // Afficher l'icône pour Pinterest
                        echo '<img src="' . esc_url(wp_get_attachment_image_url(80, 'thumbnail')) . '" alt="Pinterest Icon">';
                    }
                    ?>


                </div>

                <div class="pt-[2rem]">
                    <h2>
                        <?php the_field('h2-etapes_de_creation'); ?>
                    </h2>
                    <h3 class="pb-5">
                        <?php the_field('h3-croquis'); ?>
                    </h3>

                    <div class="grid grid-cols-2 gap-[2rem] align-middle pb-[4rem]">
                        <div class="grid grid-cols-1 justify-items-center">
                            <?php the_field('p-h3'); ?>

                            <div class="pt-2">
                                <?php $image2_id = get_field('img1-h3'); ?>
                                <img class="w-max" src="<?php echo wp_get_attachment_url($image2_id); ?>" alt="img" />
                            </div>
                        </div>

                        <div class="grid grid-cols-1 justify-items-center">
                            <?php the_field('p2-h3'); ?>
                            <div class="pt-2">
                                <?php $image3_id = get_field('img2-h3'); ?>
                                <img class="w-max" src="<?php echo wp_get_attachment_url($image3_id); ?>" alt="img" />
                            </div>
                        </div>
                    </div>

                    <div class="py-[4rem]">
                        <h3 class="pb-5">
                            <?php the_field('h3-creation'); ?>
                        </h3>
                        <div class="grid grid-cols-2 content-between gap-[2rem]">
                            <div class="grid grid-cols-1 justify-items-center">
                                <?php the_field('p-h3creation'); ?>
                                <div class="pt-2">
                                    <?php $image4_id = get_field('img-h3creation'); ?>
                                    <img class="w-max" src="<?php echo wp_get_attachment_url($image4_id); ?>" alt="img" />
                                </div>
                            </div>
                            <div class="grid grid-cols-1  justify-items-center">
                                <?php the_field('p2-h3creation'); ?>

                                <div class="socialnetwork">
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
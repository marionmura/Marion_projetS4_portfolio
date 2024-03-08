<?php get_header(); ?>
<?php if (have_posts()): ?>

    <?php while (have_posts()):
        the_post(); ?>
        <article class="">
            <h1 class="title">
           <?php the_title(); ?>
            </h1>
            <div class="">

                <div class="">

                    <div class="">
                        <?php
                        $term_image = get_field('photo'); ?>
                        <img class="img-article" src="<?php echo esc_url($term_image); ?>" alt="image">
                    </div>

                    <div class="">
                        <?php the_field('date_du_projet'); ?>
                        <?php the_field('h1_article'); ?>
                    </div>

                    <div class="">
                        <?php the_field('p_resume'); ?>
                        <div>
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
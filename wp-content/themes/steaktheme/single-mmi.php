<?php get_header(); ?>
<?php if (have_posts()) : ?>

   <?php while (have_posts()) : the_post(); ?>
       <article class="">
           <!-- <h1 class="title">
           <?php the_title(); ?> -->
           </h1>
           <div class="grid-2-article">
                          
               <div class="grid-2-row-article">   
                
               <div class="">
                <?php 
                    $term_image = get_field('photo'); ?>
                    <img class="img-article" src="<?php echo esc_url($term_image); ?>" alt="image">
                </div>    

                    <ul>
                        <div class="nom-prenom">
                            <li > <?php the_field('date_du_projet');?></li>
                        </div>

                        <li class="li-info"> <?php the_field('h1_article');?></li>
                        
                        <li class="li-info">résumé <?php the_field('p_resume');?></li>
                         
                    </ul>

                    <!-- <?php 
                    $taxonomy = 'postes';
                    $terms = get_terms( $taxonomy, array(
                        'exclude_tree' => '10,3', // pour exclure des taxonomies
                        'orderby' => 'slug'
                    ) );
                    foreach ( $terms as $term ) {
                        echo $term->name;}
                 the_terms( $post->ID, 'postes', ' ' ); 
                ?> -->
               
                </div>
                <div>
                    <?php the_content(); ?>
                </div>
           </div>
           
       </article>
   <?php endwhile; ?>
<?php endif; ?>
<?php get_footer(); ?>



<!-- <?php the_terms( $post->ID, 'equipe', 'equipe : ' ); ?><br> -->

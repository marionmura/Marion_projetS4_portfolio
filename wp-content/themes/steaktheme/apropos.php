<?php
/*
Template Name: apropos
*/

get_header();
?>
<div class="bg-blanc-ivoir">
    <div class="grid grid-cols-2 md:grid-cols-1 items-center gap-0 py-10">
        <div class="">
            <img class="relative z-50 w-[80%] sm:w-[100%] right-0 flex flex-end" src="<?php
            echo wp_get_attachment_url(13); ?>" alt="banniere" />
            <img class="absolute w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] "
                src="<?php
                echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
            <img class="absolute w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]"
                src="<?php
                echo wp_get_attachment_url(17); ?>" alt="cercle orange blur" />
            <img class="absolute w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[190px] sm:top-[-70px] overflow-hidden"
                src="<?php
                echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        </div>
        <div class="z-20 pt-[50px] md:mx-[10%]">
            <h1 class="home-h3  text-[4rem] md:text-[1.5rem] sm:text-[1rem]">
                <?php the_title(); ?> de moi
            </h1>
            <p class="text-gris text-[2rem] font-Paytone md:text-2xl sm:text-[2rem] z-40">Si vous êtes ici c'est à cause
                de votre curiosité !</p>
            <!-- <img class="cercle-rouge" src="<?php
            echo wp_get_attachment_url(19); ?>" alt="cercle rouge blur" /> -->
        </div>
    </div>

    <div class=" w-[100%]">
        <div class="arrow-down">
            <img class="" src="<?php
            echo wp_get_attachment_url(28); ?>" alt="double arrow" />
        </div>
    </div>
</div>


<div>
    <div>
        <h2>Ma vie abrégée</h2>
        <p></p>
    </div>
    <img alt="toonme challenge photo de moi" />
    <img alt="cercle violet" />

    <div>
        <h2>Mes logiciels favoris</h2>
        <div>

        </div>
    </div>

    <img alt="bannière de moi(s)" />

    <div>
    <div class="">
                <div class="socialnetwork justify-center items-center justify-items-center">
                    <a href="https://www.instagram.com/steakosaure.png/" target="_blank">
                    <img class="h-[59px]" src="<?php
                    echo wp_get_attachment_url(36); ?>" alt="icone instagram" /></a>

                    <a href="https://www.behance.net/kiwwii_kawaii" target="_blank">
                    <img class="" src="<?php
                    echo wp_get_attachment_url(33); ?>" alt="icone behance" /></a>

                    <a href="https://www.linkedin.com/in/marion-mura-o9o/" target="_blank">
                    <img class="" src="<?php
                    echo wp_get_attachment_url(34); ?>" alt="icone linkedin" /></a>
                </div>
                <p class="text-[18px] text-center">Retrouvez mon travail sur les réseaux sociaux !</p>
            </div>
    </div>
</div>

<?php get_footer(); ?>
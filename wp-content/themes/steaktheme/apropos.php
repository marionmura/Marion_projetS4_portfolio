<?php
/*
Template Name: apropos
*/

get_header();
?>
<div class="bg-blanc-ivoir">
    <div class="grid grid-cols-1 justify-items-center gap-0 py-10">
        <div class="z-0">
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
        <div class="items-center mx-[4rem] z-40 pt-[50px] pb-[8rem]">
            <h1 class="text-gris text-[4rem] font-Paytone md:text-2xl sm:text-[2rem]">
                <?php the_title(); ?> de moi
            </h1>
            <p class="mt-4 text-[24px] md:text-[20px] sm:text-[16px]">Si vous êtes ici c'est à cause de votre curiosité
                !</p>
            </p>
        </div>
    </div>

    <div class=" w-[100%]">
        <div class="arrow-down">
            <img class="" src="<?php
            echo wp_get_attachment_url(28); ?>" alt="double arrow" />
        </div>
    </div>
</div>


<div class="grid justify-items-center mt-[6rem] z-40">
    <div
        class="grid grid-cols-2 md:grid-cols-1 sm:grid-cols-1 justify-items-center  items-center justify-center mx-[4rem]">
        <div>
            <h2>Ma vie abrégée</h2>
            <p class="py-4">J’ai 21 ans et je suis étudiante en <strong>2ème année du BUT MMI</strong> à Montbéliard.
                J’adore <strong>le design et l’animation</strong>, j'admire et essaye de réaliser différents styles
                graphiques, c'est souvent compliqué de me décider avant un projet.</p>

            <p class="py-4">Le développement web n'est pas mon point fort mais j'ai eu l'occasion de m'exercer lors
                d'examens ou sur ce portfolio. J'ai expérimenté la création de sites web classiques en HTML et CSS, en
                Vue JS et TailwindCSS avec la gestion de PocketBase pour des pages dynamiques ainsi que le développement
                de thèmes Wordpress en PHP et CSS. </p>

            <p class="py-4 md:hidden">Pendant mon temps libre j’adore <strong>dessiner, faire de l’animation 2D</strong>
                et créer des histoires, je dessine principalement sur Krita avec ma tablette graphique, mais quand ce
                n'est pas possible je dessine sur téléphone avec mon petit doigt ! (Mes dessins sont plus jolis que sur
                grand écran je me demande vraiment pourquoi je simplifie ma vie...)</p>

            <p class="py-4 md:hidden">J'ai beaucoup de choses à dire sur moi mais ce n'est pas forcément intéressant ...
                Ah si, mes atouts aiguisés de graphiste concerne les logiciels de <strong>la suite Adobe ainsi que
                    Figma</strong> et si vous avez des questions n'hésitez pas à me contacter, peut-être puis-je vous
                être utile et j'en serais ravie !</p>
        </div>

        <div class="relative">
            <img class="w-[20rem] static" src="<?php echo wp_get_attachment_url(48); ?>"
                alt="toonme challenge photo de moi" />
            <img class="w-[20rem] absolute z-[-1] left-[4rem] top-[8rem]" src="<?php echo wp_get_attachment_url(16); ?>"
                alt="cercle violet" />
        </div>

    </div>
    <div class="mx-[4rem]">
        <p class="py-4 md:block hidden ">Pendant mon temps libre j’adore <strong>dessiner, faire de l’animation
                2D</strong> et créer des histoires, je dessine principalement sur Krita avec ma tablette graphique, mais
            quand ce n'est pas possible je dessine sur téléphone avec mon petit doigt ! (Mes dessins sont plus jolis que
            sur grand écran je me demande vraiment pourquoi je simplifie ma vie...)</p>

        <p class="py-4  md:block hidden">J'ai beaucoup de choses à dire sur moi mais ce n'est pas forcément intéressant
            ... Ah si, mes atouts aiguisés de graphiste concerne les logiciels de <strong>la suite Adobe ainsi que
                Figma</strong> et si vous avez des questions n'hésitez pas à me contacter, peut-être puis-je vous être
            utile et j'en serais ravie !</p>
    </div>

    <img src="<?php echo wp_get_attachment_url(41); ?>" alt="bannière de moi(s)" />

    <div class="pb-[4rem]">
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
            <p class="text-[18px] font-Paytone text-center">Retrouvez mon travail sur les réseaux sociaux !</p>
        </div>
    </div>
</div>

<?php get_footer(); ?>
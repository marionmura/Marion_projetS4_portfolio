<?php
get_header(); ?>

<script>
    // const nightModeBtn = document.getElementById('night-mode-btn');
    // const body = document.body;
    // const image = document.querySelector('.toggle-button img');

    // nightModeBtn.addEventListener('click', () => {
    //     body.classList.toggle('night-mode');
    //     if (body.classList.contains('night-mode')) {
    //         image.src = "<?php echo wp_get_attachment_url(22); ?>";
    //     } else {
    //         image.src = "<?php echo wp_get_attachment_url(23); ?>";
    //     }
    // });
</script>

<div class="bg-blanc-ivoir">

    <div class="grid grid-cols-2 md:grid-cols-1  items-center gap-0 py-10">
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
            <p class="home-h3  text-[2rem] md:text-[1.5rem] sm:text-[1rem]">Je suis Marion , graphiste et web designeuse
            </p>
            <p class="text-gris text-[6rem] font-Paytone md:text-2xl sm:text-[2rem] z-40">Marion MURA</p>
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


    <div class=" pt-[8rem]">
        <div class="flex flex-cols-2 justify-center gap-[5rem] lg:grid lg:grid-cols-1 mx-[5rem] lg:mx-[2rem] pb-[10rem]">
            <div class="w-[36rem] h-[25rem] md:w-0 md:h-0 bg-gris  rounded-lg">
            </div>
            <div>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Animation & </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40"> Motion Design</p>
                <div class="w-[36rem] h-[21rem] md:w-0 md:h-0 bg-gris my-12 rounded-lg">
                </div>
            </div>
        </div>

        <div class="flex flex-cols-2 justify-center gap-[5rem] lg:grid lg:grid-cols-1 mx-[5rem] lg:mx-[2rem] pb-[10rem] ">
            <div>
                <div class="w-[36rem] h-[21rem] md:w-0 md:h-0 bg-gris  rounded-lg mb-16">
                </div>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Affiches, </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Avatars & </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Pictogrammes</p>

            </div>
            <div class="w-[36rem] h-[50rem] md:w-0 md:h-0 bg-gris rounded-lg mb-12">
            </div>

        </div>

        <div class="flex flex-cols-2 justify-center gap-[5rem] lg:grid lg:grid-cols-1 mx-[5rem] lg:mx-[2rem] py-12 ">
            <div>
                <div class="w-[36rem] h-[19rem] md:w-0 md:h-0 bg-gris  rounded-lg mb-16">
                </div>
                <div class="w-[36rem] h-[19rem] md:w-0 md:h-0 bg-gris  rounded-lg mb-16">
                </div>
            </div>
            <div>
                <div class="w-[36rem] h-[27rem] md:w-0 md:h-0 bg-gris  rounded-lg mb-4">
                </div>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Chartes </p>
                <p class="text-gris text-[4rem] font-Paytone lg:text-[3rem] sm:text-[2rem] z-40">Graphiques</p>
            </div>
        </div>
    </div>

    <div class=" flex justify-center pb-[10rem] gap-5">
        <p class="text-[2rem] font-Paytone text-gris md:text-[20px]  ">PROJETS MMI</p>
        <img class="rotate-[-90deg] w-[30px]" src="<?php
        echo wp_get_attachment_url(28); ?>" alt="double arrow" />
    </div>

    <div class="flex flex-cols-3 justify-center gap-[5rem] md:gap-[2rem] mx-[3rem]">
        <div class="place-items-center w-[25rem] md:w-[20rem]">
            <p class="text-gris font-Paytone text-2xl md:text-[28px]">Je suis Artiste,</p>
            <p class="text-gris font-Paytone text-[26px] md:text-[20px]">pendant mon temps libre. Je dessine sur Krita et tablette graphique.</p>
            <p class="text-gris font-Paytone text-[26px] md:text-[20px]">J’ai réalisé plusieurs projets comme une BD ou de l’animation 2D.</p>
            <div class=" flex justify-center mt-[3rem] gap-5">
                <p class="text-[25px] font-Paytone text-gris md:text-[20px]">MES PROJETS</p>
                <img class="rotate-[-90deg] w-[30px]" src="<?php
                echo wp_get_attachment_url(28); ?>" alt="double arrow" />
            </div>
        </div>
        <div class="w-[18rem] h-[35rem] md:w-0 md:h-0 bg-gris rounded-lg mb-16"></div>
        <div class="w-[25rem] h-[35rem] md:w-0 md:h-0 bg-gris  rounded-lg mb-16"></div>
    </div>



        <!-- 
    <div class="presentation-grid-2">
        <div>
            <h1>Moi c’est Marion</h1>
            <p>J’ai 21 ans et je suis étudiante au BUT MMI à Montbéliard.</p>
            <p>Je suis en 2ème année et je travaille avec la suite Adobe (InDesign, After Effect, Illustrator et Photoshop).</p>
            <p>J’ai déjà eu l’occasion de réaliser des sites web avec Wordpress ou en HTML/ CSS ou en Vue JS et pocketbase pour la gestion des pages dynamiques.</p>
            <p>Et pendant mon temps libre j’adore dessiner, vous pouvez me retrouver sur Instagram sous steakosaure.png.</p>
        </div>
        <div>
            <img class="photodemoi" src="<?php
            echo wp_get_attachment_url(15); ?>" alt="banniere" />
            <img class="cercles" src="<?php
            echo wp_get_attachment_url(18); ?>" alt="banniere" />
            <img class="cercles" src="<?php
            echo wp_get_attachment_url(19); ?>" alt="banniere" />
        </div>
    </div> -->

        <?php
        get_footer();
        ?>
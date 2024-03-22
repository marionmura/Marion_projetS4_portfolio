<?php
get_header(); ?>

<div class="bg-blanc-ivoir grid grid-cols-1 justify-items-center ">
    <div class="gap-0 py-10">
        <div class="z-0">
            <img class="absolute w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] "
                src="<?php
                echo wp_get_attachment_url(17); ?>" alt="cercle violet blur" />
            <img class="absolute w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]"
                src="<?php
                echo wp_get_attachment_url(16); ?>" alt="cercle orange blur" />
            <img class="absolute w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[190px] sm:left-[180px] sm:top-[-70px] overflow-hidden"
                src="<?php
                echo wp_get_attachment_url(19); ?>" alt="cercle rouge blur" />
        </div>

    </div>
    <div class="items-center z-40 pt-[50px] mx-[15rem] pb-[8rem]">
        <h1 class="text-gris text-[4rem] font-Paytone md:text-2xl sm:text-[2rem]">Perdu ? Cette page ne semble pas exister :(</h1>
        </p>
    </div>

</div>

<?php
get_footer(); ?>
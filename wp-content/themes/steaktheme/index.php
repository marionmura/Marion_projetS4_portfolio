<?php
get_header(); ?>


<div class="">

    <div class="grid grid-cols-1 justify-items-center md:grid-cols-1 items-center gap-0 py-10 sm:mx-[2rem] md:mx-[2rem] mx-[12vw]">
        <div class="">
            <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php echo wp_get_attachment_url(16); ?>" alt="cercle violet blur" />
            <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php echo wp_get_attachment_url(17); ?>" alt="cercle orange blur" />
            <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[180px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php echo wp_get_attachment_url(18); ?>" alt="cercle vert blur" />
        </div>
        <div class="grid grid-cols-1 justify-items-center mb-[10rem]">
            <h1 class="grid grid-cols-1 justify-items-center absolute mx-[4rem] md:mx-[2rem] sm:mx-[1rem] lg:mx-[8rem]  text-[8rem] top-[340px] lg:top-[322px] md:top-[380px] sm:top-[380px] text-[#892dff] portfoliostyle lg:text-[60px] md:text-[4rem] sm:text-[2rem]">404 ERROR</h1>
            <img class="w-max lg:top-[150px] block md:hidden md:w-0 filter-gris2" src="<?php echo wp_get_attachment_url(112); ?>" alt="banniere" />
            <img class="hidden md:block filter-gris2" src="<?php echo wp_get_attachment_url(73); ?>" alt="banniere" />
            <div class="glassmorphisme p-5 px-5 top-[150px] relative">
                <h1 class="text-[8rem]  lg:text-[60px] md:text-[4rem] sm:text-[2rem] text-transparent portfoliostyle">404 ERROR</h1>
            </div>
            <div class="h-[4rem]"></div>
        </div>
    </div>
</div>

<?php
get_footer(); ?>
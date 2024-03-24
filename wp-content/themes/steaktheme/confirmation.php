<?php
/*
Template Name: confirmation
*/
get_header();
?>

<div class=" grid grid-cols-1 justify-items-center ">
    <div class="gap-0 py-10">
        <div class="">
            <img class="absolute z-[-1] w-[480px] left-[-100px] top-[50px] md:top-[0px] sm:w-[400px] sm:top-[-110px] sm:left-[-40px] " src="<?php  echo wp_get_attachment_url(17); ?>" alt="cercle violet blur" />
            <img class="absolute z-[-1] w-[250px] top-[320px] left-[200px] md:w-[200px] md:left-[150px] md:top-[380px] sm:w-[200px] sm:left-10 sm:top-[200px]" src="<?php  echo wp_get_attachment_url(16); ?>" alt="cercle orange blur" />
            <img class="absolute z-[-1] w-[240px] top-0 left-[180px] md:w-[200px] md:left-[200px] sm:w-[180px] sm:left-[190px] sm:top-[-70px] overflow-hidden" src="<?php  echo wp_get_attachment_url(19); ?>" alt="cercle rouge blur" />
        </div>

    </div>
    <div class="items-center z-40 pt-[50px] sm:mx-[2rem] md:mx-[2rem] mx-[12vw] pb-[6rem]">
        <h1 class="text-gris text-[4rem] font-Paytone md:text-2xl sm:text-[2rem]">Votre message a bien été envoyé</h1>
        <p class="mt-4 text-[24px] md:text-[20px] sm:text-[16px]">En attendant que je le lise, découvrez mes projets !</p>
        </p>
    </div>


    <a href="https://marionmura.fr">
        <div class=" flex justify-center mb-8">
            <input class=" hover:!bg-[#FFACAC]  !text-blanc hover:!text-gris mb-7" type="submit" value="disparaître">
        </div>
    </a>

</div>
</div>
</div>

<?php
get_footer();
?>
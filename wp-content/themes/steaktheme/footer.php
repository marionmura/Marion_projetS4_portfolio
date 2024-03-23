<footer>
  <div class="grid grid-cols-2 md:grid-cols-1 justify-items-center items-center md:pb-[2rem]">
    <div class="grid grid-cols-2 md:grid-cols-1 items-center">
    <img class="w-[80px] m-5" src="<?php echo get_template_directory_uri(); ?>/favicon.svg" alt="logo" />
    <h1 class="text-blanc md:pb-8">Contactez moi !</h1>
    </div>
    <!-- <nav class="grid grid-cols-2">
      <?php wp_nav_menu(array(  'theme_location' => 'footer-menu'  )); ?></nav> -->


    <div class="grid grid-cols-3 gap-[2rem] justify-center items-center justify-items-center ">
      <a href="https://www.instagram.com/steakosaure.png/" target="_blank">
        <img class="h-[30px]" src="<?php echo wp_get_attachment_url(130); ?>" alt="icone instagram" /></a>

      <a href="https://www.behance.net/kiwwii_kawaii" target="_blank">
        <img class="h-[30px]" src="<?php echo wp_get_attachment_url(128); ?>" alt="icone behance" /></a>

      <a href="https://www.linkedin.com/in/marion-mura-o9o/" target="_blank">
        <img class="h-[30px]" src="<?php echo wp_get_attachment_url(129); ?>" alt="icone linkedin" /></a>
    </div>
  </div>

</footer>
</div>
<?php wp_footer(); ?>
</body>

</html>
<footer>
  <div class="footer-grid-3">
      <?php echo wp_get_attachment_image(67, 'full'); ?>
       <nav><?php
         wp_nav_menu ( array (
           'theme_location' => 'footer-menu'
         ) ); ?></nav>
         
      </div>
      <p class=""> Marion Mura's portfolio</p>
     </footer>
   </div>
   <?php wp_footer(); ?>
 </body>
</html>

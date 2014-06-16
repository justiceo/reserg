<hr>
       
      <footer>
        <a href="<?php echo site_url(); ?>">&copy; <?php echo bloginfo('name'); ?></a>
         <?php wp_nav_menu( array( 'theme_location' => 'footer-menu', 'container_class' => 'footer-menu', 'menu_class' => 'nav pull-right' ) ); ?>
      </footer>

    </div> <!-- /container -->

    <?php wp_footer(); ?>

  </body>
</html>
<footer class="footer">
        <div class="container">
            <div class="footer__wrapper">
                <nav class="footer__nav">
                <?php wp_nav_menu( [
                      'theme_location'  => 'footer_menu',
                      'container'       => null,
                      'menu_class'      => 'footer__list',
                      'menu_id'         => 'footer__nav',

                    ] ); ?>
                </nav>
                <a href="<?php echo home_url(); ?> " class="footer__logo">
                    <img src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="logo" class="footer__logo-img">
                </a>
            </div>
            
        </div>
    </footer>
    <?php wp_footer(); ?>
  </body>
</html>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?php bloginfo( 'description'); ?></title>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="header__wrapper">
        <div class="header__left">
          <div class="header__logo logo">
            <a href="<?php bloginfo( 'url'); ?>" class="logo__link">
              <img src="<?php bloginfo( 'template_url'); ?>/assets/images/logo-arch.svg" alt="logo" />
            </a>
          </div>
          <nav class="header__nav nav">
          <?php wp_nav_menu( [
                      'theme_location'  => 'top_menu',
                      'container'       => null,
                      'menu_class'      => 'nav__list',
                      'menu_id'         => 'nav',

                    ] ); ?>
          </nav>
        </div>
        <div class="header__right">
          <button class="header__search">
            <img
              src="<?php echo IMG_DIR; ?>/search-icon.svg"
              alt="search"
              class="header__search-item"
            />
          </button>
          <button class="header__authorization btn">Sign In</button>
          <button class="header__authorization btn btn-active">Sign Up</button>
        </div>
      </div>
    </header>
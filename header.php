<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Arch Move</title>
    <?php wp_head(); ?>
  </head>
  <body>
    <header class="header">
      <div class="header__wrapper">
        <div class="header__left">
          <div class="header__logo logo">
            <a href="" class="logo__link">
              <img src="<?php echo IMG_DIR; ?>/logo-arch.svg" alt="logo" />
            </a>
          </div>
          <nav class="header__nav nav">
            <ul class="nav__list">
              <li class="nav__item">
                <a href="#" class="nav__link">Design Gallery</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">List of Architect</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">Articles</a>
              </li>
              <li class="nav__item">
                <a href="#" class="nav__link">How it Works</a>
              </li>
            </ul>
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
<?php get_header(); ?>
    <main class="main">
      <div class="container">
        <h1 class="main__title title"><?php the_field('main_title'); ?> <span><?php the_field('accent_word'); ?></span></h1>
        <div class="main__content">
          <div class="main__content-left">
            <p class="main__content-text">
            <?php the_field('main_text'); ?>
            </p>
            <button class="main__content-btn btn btn-active">
              Free Consultation
            </button>
          </div>
          <img
            class="main__content-img"
            src="<?php the_field('main_img'); ?>"
            alt="mainImage"
          />
        </div>
        <section class="main__gallery gallery">
          <h2 class="gallery__title title">
          <?php the_field('gallery_title'); ?>
          </h2>
          <div class="gallery__wrapper popup-gallery">
            <a class="gallery__img" href="<?php the_field('gallery_img1'); ?>" title="GalleryPhoto">
              <img
                src="<?php the_field('gallery_img1'); ?>"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php the_field('gallery_img2'); ?>" title="GalleryPhoto">
              <img
                src="<?php the_field('gallery_img2'); ?>"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php the_field('gallery_img3'); ?>" title="GalleryPhoto">
              <img
                src="<?php the_field('gallery_img3'); ?>"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php the_field('gallery_img4'); ?>" title="GalleryPhoto">
              <img
                src="<?php the_field('gallery_img4'); ?>"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php the_field('gallery_img5'); ?>" title="GalleryPhoto">
              <img
                src="<?php the_field('gallery_img5'); ?>"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php the_field('gallery_img6'); ?>" title="GalleryPhoto">
              <img
                src="<?php the_field('gallery_img6'); ?>"
                alt=""
                class="gallery__img-item"
              />
            </a>
          </div>
        </section>
        <section class="main__about about">
          <h2 class="about__title title"><?php the_field('about_title'); ?></h2>
          <div class="about__main">
            <img
              src="<?php echo IMG_DIR; ?>/about-img.png"
              alt="aboutImg"
              class="about__img"
            />
            <div class="about__content">
              <?php foreach(getFeatures() as $feature): ?>
              <div class="about__content-wrapper">
                <img
                  src="<?php echo $feature['img'] ?>"
                  alt=""
                  class="about__content-img"
                />
                <div class="about__content-text">
                  <h4 class="about__content-title">
                  <?php echo $feature['title'] ?>
                  </h4>
                  <p class="about__content-subtitle">
                  <?php echo $feature['text'] ?>
                  </p>
                  <i><?php echo $feature['add_desc'] ?></i>
                </div>
              </div>

              <?php endforeach; ?>
              
              <button class="about__content-btn btn btn-active">
                CONSULTATION
              </button>
            </div>
          </div>
        </section>
        <section class="main__reviews reviews">
          <h2 class="reviews__title title"><?php the_field('reviews_title'); ?></h2>
          <div class="reviews__content swiper">
            <div class="swiper-container">
              <!-- Additional required wrapper -->
              <div class="swiper-wrapper">
                <!-- Slides -->
                <div class="swiper-slide">
                  <blockquote class="swiper-content">
                    <p class="swiper-text">
                      We just wanted to thank you for this fantastic website! We
                      are so grateful for being able to advertise our Petite
                      cabin and receive feedback from people from all over the
                      U.S. and even further.
                    </p>
                    <cite class="swiper-author"
                      ><span>Adam Morph</span> — CEO A lfatech</cite
                    >
                  </blockquote>
                </div>
                <div class="swiper-slide">
                  <blockquote class="swiper-content">
                    <p class="swiper-text">
                      We just wanted to thank you for this fantastic website! We
                      are so grateful for being able to advertise our Petite
                      cabin and receive feedback from people from all over the
                      U.S. and even further.
                    </p>
                    <cite class="swiper-author"
                      ><span>Adam Morph</span> — CEO A lfatech</cite
                    >
                  </blockquote>
                </div>
                <div class="swiper-slide">
                  <blockquote class="swiper-content">
                    <p class="swiper-text">
                      We just wanted to thank you for this fantastic website! We
                      are so grateful for being able to advertise our Petite
                      cabin and receive feedback from people from all over the
                      U.S. and even further.
                    </p>
                    <cite class="swiper-author"
                      ><span>Adam Morph</span> — CEO A lfatech</cite
                    >
                  </blockquote>
                </div>
              </div>

              <!-- If we need navigation buttons -->
              <div class="swiper-button-prev"></div>
              <div class="swiper-button-next"></div>
            </div>
          </div>
        </section>
        <section class="main__consultate consultate">
          <div class="consultate__wrapper">
            <img
              class="consultate__img"
              src="<?php echo IMG_DIR; ?>/consultate-img.png"
              alt="Build"
            />
            <div class="consultate__content">
              <h2 class="consultate__title">
              <?php the_field('consultate_title'); ?> <span><?php the_field('accent_word_consultate'); ?></span>
              </h2>
              <button class="consultate__btn btn btn-active">
                FREE CONSULTATION
              </button>
            </div>
          </div>
        </section>


        <section class="main__partners partners">
            <h2 class="partners__title title"> <?php the_field('partners_title'); ?> </h2>
            <div class="partners__wrapper">
              <img src="<?php echo IMG_DIR; ?>/partners/partner1.svg" alt="partner-img" class="partners__img" />
              <img src="<?php echo IMG_DIR; ?>/partners/partner2.svg" alt="partner-img" class="partners__img" />
              <img src="<?php echo IMG_DIR; ?>/partners/partner3.svg" alt="partner-img" class="partners__img" />
              <img src="<?php echo IMG_DIR; ?>/partners/partner4.svg" alt="partner-img" class="partners__img" />
              <img src="<?php echo IMG_DIR; ?>/partners/partner6.svg" alt="partner-img" class="partners__img" />
            </div>
          </section>
      </div>

     
    </main>

    <?php get_footer(); ?>
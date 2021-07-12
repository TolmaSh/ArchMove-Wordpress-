<?php get_header(); ?>
    <main class="main">
      <div class="container">
        <h1 class="main__title title">Build Your Dream <span>House</span></h1>
        <div class="main__content">
          <div class="main__content-left">
            <p class="main__content-text">
              The first and most trusted marketplace of design & build house in
              The World. 100% guaranteed Build safe, comfortable and transparent
              with a project management for the best result
            </p>
            <button class="main__content-btn btn btn-active">
              Free Consultation
            </button>
          </div>
          <img
            class="main__content-img"
            src="<?php echo IMG_DIR; ?>/mainRoom-image.png"
            alt="mainImage"
          />
        </div>
        <section class="main__gallery gallery">
          <h2 class="gallery__title title">
            Build professional valuable room for you
          </h2>
          <div class="gallery__wrapper popup-gallery">
            <a class="gallery__img" href="<?php echo IMG_DIR; ?>/gallery/img1.png" title="GalleryPhoto">
              <img
                src="<?php echo IMG_DIR; ?>/gallery/img1.png"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php echo IMG_DIR; ?>/gallery/img2.png" title="GalleryPhoto">
              <img
                src="<?php echo IMG_DIR; ?>/gallery/img2.png"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php echo IMG_DIR; ?>/gallery/img3.png" title="GalleryPhoto">
              <img
                src="<?php echo IMG_DIR; ?>/gallery/img3.png"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php echo IMG_DIR; ?>/gallery/img4.png" title="GalleryPhoto">
              <img
                src="<?php echo IMG_DIR; ?>/gallery/img4.png"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php echo IMG_DIR; ?>/gallery/img2.png" title="GalleryPhoto">
              <img
                src="<?php echo IMG_DIR; ?>/gallery/img2.png"
                alt=""
                class="gallery__img-item"
              />
            </a>
            <a class="gallery__img" href="<?php echo IMG_DIR; ?>/gallery/img1.png" title="GalleryPhoto">
              <img
                src="<?php echo IMG_DIR; ?>/gallery/img1.png"
                alt=""
                class="gallery__img-item"
              />
            </a>
          </div>
        </section>
        <section class="main__about about">
          <h2 class="about__title title">Build your needs with Archmove</h2>
          <div class="about__main">
            <img
              src="<?php echo IMG_DIR; ?>/about-img.png"
              alt="aboutImg"
              class="about__img"
            />
            <div class="about__content">
              <div class="about__content-wrapper">
                <img
                  src="<?php echo IMG_DIR; ?>/about-icon1.svg"
                  alt=""
                  class="about__content-img"
                />
                <div class="about__content-text">
                  <h4 class="about__content-title">
                    100% guaranteed project completion
                  </h4>
                  <p class="about__content-subtitle">
                    Build safe, comfortable and transparent with a project
                    management application with a joint account.
                  </p>
                </div>
              </div>
              <div class="about__content-wrapper">
                <img
                  src="<?php echo IMG_DIR; ?>/about-icon2.svg"
                  alt=""
                  class="about__content-img"
                />
                <div class="about__content-text">
                  <h4 class="about__content-title">No additional fees</h4>
                  <p class="about__content-subtitle">
                    There are no hidden costs. The value of the offer you get is
                    the value you paid.
                  </p>
                </div>
              </div>
              <div class="about__content-wrapper">
                <img
                  src="<?php echo IMG_DIR; ?>/about-icon3.svg"
                  alt=""
                  class="about__content-img"
                />
                <div class="about__content-text">
                  <h4 class="about__content-title">Get escort from the Team</h4>
                  <p class="about__content-subtitle">
                    Monitor reports from the Arsitag team who check directly in
                    the field.
                  </p>
                </div>
              </div>
              <button class="about__content-btn btn btn-active">
                CONSULTATION
              </button>
            </div>
          </div>
        </section>
        <section class="main__reviews reviews">
          <h2 class="reviews__title title">Sound Too Good To Be True?</h2>
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
                Realize your dream project with <span>Archmove</span>
              </h2>
              <button class="consultate__btn btn btn-active">
                FREE CONSULTATION
              </button>
            </div>
          </div>
        </section>


        <section class="main__partners partners">
            <h2 class="partners__title title">Our Partners</h2>
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
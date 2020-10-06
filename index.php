<?php include("header.php")?>
    <nav class="breadcrumb">
      <div class="container">
        <ul class="breadcrumb-list">
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Home</a>
          </li>
          <li class="breadcrumb-list__item">
            <a href="#" class="breadcrumb-list__link">Flash Offers</a>
          </li>
          <li class="breadcrumb-list__item">Grand Hilton Hotel</li>
        </ul>
      </div>
      <!-- /.container -->
    </nav>
    <!-- /.breadcrumb -->
    <section class="hotel">
      <div class="container">
        <div class="hotel-info">
          <div class="hotel-info__text">
            <div class="hotel-wrapper">
              <div class="stars">
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
              </div>
              <h1 class="hotel-name hotel-info__name">GRAND HILTON HOTEL</h1>
              <span class="offer hotel-info__offer">Flash Offer</span>
            </div>
            <p class="hotel-description hotel-info__description">
              Half-Board/ All Inclusive + Complimentary Activities + Child Stays
              Free
            </p>
          </div>
          <!-- /.hotel-info__text -->
          <div class="rating hotel-info__rating">
            <span class="rating__text">User Rattings</span>
            <span class="rating__counter">
              <span class="rating__counter_size-big">4.5/</span>5</span
            >
          </div>
          <!-- /.hotel-info__rating -->
        </div>
        <!-- /.hotel-info -->
        <div class="hotel-grid">
          <!-- Slider main container -->
          <div class="swiper-container hotel__slider hotel-slider">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__img"
                  src="img/slide.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__img"
                  src="img/slide2.jpg"
                  alt="slide"
                />
              </div>
              <div class="swiper-slide hotel-slider__item">
                <img
                  class="hotel-slider__img"
                  src="img/slide3.jpg"
                  alt="slide"
                />
              </div>
            </div>
            <!-- If we need navigation buttons -->
            <button
              class="hotel-slider__button hotel-slider__button__next"
            ></button>
            <button
              class="hotel-slider__button hotel-slider__button__prev"
            ></button>
          </div>
          <!-- /.swiper-container -->
          <div class="block-info">
            <div class="booking">
              <div class="booking__info">
                <div class="booking__price">
                  <span class="booking__start">price starts as</span>
                  <strong class="booking__tag">$ 8,500</strong>
                  <span class="booking__per-room">per room / night</span>
                </div>
                <!-- /.price -->
                <div class="booking__room">
                  <span class="booking__description">2 x Guests</span>
                  <span class="booking__description">1 x Room</span>
                </div>
                <!-- /.booking__room -->
              </div>
              <!-- /.booking__info -->
              <div class="booking__call-center">
                <span class="booking__heading">Quick Booking</span>
                <a href="tel:12100" class="booking__number">12100</a>
              </div>
              <!-- /.booking__call-center -->
              <button data-toggle="modal" class="button booking__button">
                View Other Options
              </button>
            </div>
            <!-- /.booking -->
            <div class="map"><iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3952.5414950814966!2d98.29703101383727!3d7.838252394352195!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x305025650c33dbab%3A0xa67a542329d011e1!2z0J_RhdGD0LrQtdGCLCDQmtCw0YDQvtC9LCDQntGC0LXQu9GMINCl0LjQu9GC0L7QvQ!5e0!3m2!1sru!2sru!4v1601875769383!5m2!1sru!2sru" class="map" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </div>
          </div>
          <!-- /.hotel-right -->
          <!-- /.map -->
        </div>
        <!-- /.hotel-grid -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.hotel -->

    <section class="packages">
      <div class="container">
        <h2 class="packages__title">Other Packages</h2>
        <div class="packages-wrapper">
          <div class="packages-item first" data-aos="fade-right"  data-aos-duration="1000">
            <span class="offer packages__offer first__offer">Flash Offer</span>
            <!-- /.offer -->
            <img
              src="img/pack-1.jpg"
              alt="packages"
              class="packages-item__img first__img"
            />
            <div class="packages-item__text first__text">
              <div class="info">
                <div class="packages-item__rating first__rating">
                  <img src="img/star.svg" alt="star" class="star" />
                  <img src="img/star.svg" alt="star" class="star" />
                  <img src="img/star.svg" alt="star" class="star" />
                  <img src="img/star.svg" alt="star" class="star" />
                  <img src="img/star.svg" alt="star" class="star" />
                </div>
                <h3 class="packages-item__title first__title">
                  Hotel Blue Haven
                </h3>
              </div>
              <p class="packages-item__description first__description">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <!-- /.packages__description -->
              <div class="packages-item__person-room first__person">
                <span class="packages__info">1749 Wheeler Ridge Delaware</span>
                <span class="packages__info">2 x Guests</span>
                <span class="packages__info">1 x Room</span>
              </div>
              <!-- /.person-room -->
              <div class="packages__order">
                <div class="packages__price">
                  <span class="packages__old-cost">$ 10,500</span>
                  <span class="packages__cost"> $ 8,500</span>
                </div>
                <!-- /.packages__price -->
                <button data-toggle="modal" class="packages__button">Book Now</button>
              </div>
              <!-- /.packages__order -->
            </div>
            <!--/.packages-text-->
          </div>
          <!-- /.packages__item -->
          <div class="packages-item" data-aos="fade-left" data-aos-duration="1000">
            <span class="offer packages__offer">Flash Offer</span>
            <!-- /.offer -->
            <img
              src="img/pack-2.jpg"
              alt="Hotel: LUX* Belle Mare"
              class="packages-item__img"
            />
            <div class="packages-item__text">
              <div class="packages-item__rating">
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
              </div>
              <h3 class="packages-item__title">LUX* Belle Mare</h3>
              <p class="packages-item__description">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <!-- /.packages__description -->
              <div class="packages-item__person-room">
                <span class="packages__info">1749 Wheeler Ridge Delaware</span>
                <span class="packages__info">2 x Guests</span>
                <span class="packages__info">1 x Room</span>
              </div>
              <!-- /.person-room -->
              <div class="packages__order">
                <div class="packages__price">
                  <span class="packages__old-cost">$ 8,500</span>
                  <span class="packages__cost">$ 3,000</span>
                </div>
                <!-- /.packages__price -->
                <button data-toggle="modal" class="packages__button">Book Now</button>
              </div>
              <!-- /.packages__order -->
            </div>
            <!--/.packages-text-->
          </div>
          <!-- /.packages__item -->
          <div class="packages-item" data-aos="fade-up" data-aos-delay="300" data-aos-duration="1000">
            <span class="offer packages__offer">Flash Offer</span>
            <!-- /.offer -->
            <img
              src="img/pack-3.jpg"
              alt="Hotel: White Palace"
              class="packages-item__img"
            />
            <div class="packages-item__text">
              <div class="packages-item__rating">
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
              </div>
              <h3 class="packages-item__title">White Palace</h3>
              <p class="packages-item__description">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <!-- /.packages__description -->
              <div class="packages-item__person-room">
                <span class="packages__info">1749 Wheeler Ridge Delaware</span>
                <span class="packages__info">2 x Guests</span>
                <span class="packages__info">1 x Room</span>
              </div>
              <!-- /.person-room -->
              <div class="packages__order">
                <div class="packages__price">
                  <span class="packages__old-cost">$ 10,500</span>
                  <span class="packages__cost">$ 9,500</span>
                </div>
                <!-- /.packages__price -->
                <button data-toggle="modal" class="packages__button">Book Now</button>
              </div>
              <!-- /.packages__order -->
            </div>
            <!--/.packages-text-->
          </div>
          <!-- /.packages__item -->
          <div class="packages-item" data-aos="fade-up" data-aos-delay="400" data-aos-duration="1000">
            <span class="offer packages__offer">Flash Offer</span>
            <!-- /.offer -->
            <img
              src="img/pack-4.jpg"
              alt="Hotel: Luxury Place"
              class="packages-item__img"
            />
            <div class="packages-item__text">
              <div class="packages-item__rating">
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
              </div>
              <h3 class="packages-item__title">Luxury Place</h3>
              <p class="packages-item__description">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <!-- /.packages__description -->
              <div class="packages-item__person-room">
                <span class="packages__info">1749 Wheeler Ridge Delaware</span>
                <span class="packages__info">2 x Guests</span>
                <span class="packages__info">1 x Room</span>
              </div>
              <!-- /.person-room -->
              <div class="packages__order">
                <div class="packages__price">
                  <span class="packages__old-cost">$ 4,500</span>
                  <span class="packages__cost">$ 2,500</span>
                </div>
                <!-- /.packages__price -->
                <button data-toggle="modal" class="packages__button">Book Now</button>
              </div>
              <!-- /.packages__order -->
            </div>
            <!--/.packages-text-->
          </div>
          <!-- /.packages__item -->
          <div class="packages-item" data-aos="fade-up" data-aos-delay="500" data-aos-duration="1000">
            <span class="offer packages__offer">Flash Offer</span>
            <!-- /.offer -->
            <img
              src="img/pack-5.jpg"
              alt="Hotel: Hotel Five Star"
              class="packages-item__img"
            />
            <div class="packages-item__text">
              <div class="packages-item__rating">
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
                <img src="img/star.svg" alt="star" class="star" />
              </div>
              <h3 class="packages-item__title">Hotel Five Star</h3>
              <p class="packages-item__description">
                Aute quis duis excepteur excepteur ipsum cat eiusmod consectetur
                enim laborum magna llit. Ipsum est fugiat velit ea llamco do
                esse ut in veniam sun in onsequat. Aute quis duis epteur
                excepteur ipsum occaecat eiusmod nsectetur enim laborum magna
                mollit. Ipsum est fugiat velit ea ullamco do
              </p>
              <!-- /.packages__description -->
              <div class="packages-item__person-room">
                <span class="packages__info">1749 Wheeler Ridge Delaware</span>
                <span class="packages__info">2 x Guests</span>
                <span class="packages__info">1 x Room</span>
              </div>
              <!-- /.person-room -->
              <div class="packages__order">
                <div class="packages__price">
                  <span class="packages__old-cost">$ 6,500</span>
                  <span class="packages__cost">$ 3,500</span>
                </div>
                <!-- /.packages__price -->
                <button data-toggle="modal" class="packages__button">Book Now</button>
              </div>
              <!-- /.packages__order -->
            </div>
            <!--/.packages-text-->
          </div>
          <!-- /.packages__item -->
        </div>
        <!-- /.packages-wrapper -->
      </div>
      <!--/.container-->
    </section>
    <!-- /.packages -->

    <section
      class="newsletter"
      data-parallax="scroll"
      data-image-src="img/newletter-bg.jpg"
    >
      <div class="newsletter-wrapper">
        <h2 class="newsletter-title">
          subscribe to our
          <span class="newsletter-title__strong">Newsletter</span>
        </h2>
        <form
          action="send.php"
          method="POST"
          class="form subscribe newsletter__subscribe"
        >
        <div class="subscribe__input-group">
          <input
            type="email"
            class="subscribe__input"
            placeholder="Your email address"
            name="email"
            required
          />
          </div>
          <button class="subscribe__button" name="button-email">Send</button></div>
        </form>
      </div>
      <!-- /.newsletter-wrapper -->
    </section>
    <!-- /.newsletter -->
    <section class="reviews">
      <div class="container">
        <h2 class="reviews__title">What people thinks about us</h2>
        <!-- Slider main container -->
        <div class="swiper-container reviews-slider">
          <!-- Additional required wrapper -->
          <div class="swiper-wrapper">
            <!-- Slides -->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar.jpg"
                    alt="Photo: Megan Fox"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__user-name">Megan Fox</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                  </div>
                  <!--/.assessment-->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
                <!-- /.reviews-slider__text -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!--/.swiper-slide-->
            <div class="swiper-slide">
              <div class="reviews-slider__item">
                <div class="reviews-slider__profile">
                  <img
                    src="img/reviews-avatar2.jpg"
                    alt="Photo: Emma Watson"
                    class="reviews-slider__avatar"
                  />
                  <h3 class="reviews-slider__user-name">Emma Watson</h3>
                  <span class="reviews-slider__date">Stayed 18 Nov, 2019</span>
                  <div class="reviews-slider__rating">
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                    <img src="img/star.svg" alt="star" class="star" />
                  </div>
                  <!--/.assessment-->
                </div>
                <!-- /.reviews-slider__profile -->
                <p class="reviews-slider__text">
                  It was very nice hotel with cleanliness. Staff behavior was
                  good and polite. They welcome us very well. Issue was only
                  that Lift was not in working and we were allotted to 3rd floor
                  and amenities articles were in corner of gallery which were
                  giving bad feeling. Breakfast was good and support of the
                  staff was also very nice. Location is not good as per
                  atmosphere, it is very nearby most of the popular places but
                  self location in a narrow street is not good. Overall it was a
                  good experience and could recommend.
                </p>
                <!-- /.reviews-slider__text -->
              </div>
              <!-- /.reviews-slider__item -->
            </div>
            <!--/.swiper-slide-->
          </div>
          <!--/.swiper-wrapper-->
          <!-- If we need navigation buttons -->
          <button
            class="reviews-slider__button reviews-slider__button__prev"
          ></button>
          <button
            class="reviews-slider__button reviews-slider__button__next"
          ></button>
          <!--/.reviews-slider-->
        </div>
      </div>
      <!-- /.container -->
    </section>
    <!-- /.reviews -->
    <section class="activities">
      <div class="container">
        <h2 class="activities__title">Other Activities</h2>
        <div class="activities-wrapper">
          <div class="card activities__card">
            <img
              src="img/card-1.jpg"
              alt="The curious corner of chamarel"
              class="card__image"
            />
            <h3 class="card__title">The curious corner of&nbsp;chamarel</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!--/.card-->
          <div class="card activities__card">
            <img
              src="img/card-2.jpg"
              alt="Gymkhana club golf course"
              class="card__image"
            />
            <h3 class="card__title">Gymkhana club golf course</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!--/.card-->
          <div class="card activities__card">
            <img
              src="img/card-3.jpg"
              alt="Tamarind falls hiking trip - full day"
              class="card__image"
            />
            <h3 class="card__title">
              Tamarind falls hiking trip&nbsp;-&nbsp;full&nbsp;day
            </h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!--/.card-->
          <div class="card activities__card">
            <img
              src="img/card-4.jpg"
              alt="The blue marine discovery quest"
              class="card__image"
            />
            <h3 class="card__title">The blue marine discovery quest</h3>
            <button data-toggle="modal" class="card__button">Book Now</button>
          </div>
          <!--/.card-->
        </div>
        <!-- /.activities-wrapper -->
        <!-- /.activities-title -->
      </div>
      <!-- /.container -->
    </section>
    <!-- /.activities -->
<?php include("footer.php")?>
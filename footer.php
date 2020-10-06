 <footer class="footer">
      <div class="container">
        <div class="footer-wrapper">
          <img
            src="img/vertical-logo.svg"
            alt="Best Tour Plan"
            class="logo footer__logo"
          />
          <div class="footer__list footer__categories">
            <h3 class="footer__title">ALL CATEGORIES</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">All Deals </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotels</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Activities</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Spa Packages </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Hotel Day Packages </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Restaurants</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Fitness</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Rodrigues</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__list footer__additional">
            <h3 class="footer__title">ADDITIONAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">About Us </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Contact Us </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">How does it work? </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Frequently Asked Questions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Deals.mu loyalty program </a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link"
                  >Promote your Business on BTP</a
                >
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__social-network">
            <h3 class="footer__title footer__title_inline">Social Network</h3>
            <div class="footer__social-links">
              <a href="#" class="footer__link"
                ><img
                  src="img/facebook.svg"
                  alt="facebook"
                  class="footer__icon"
              /></a>
              <a href="#" class="footer__link"
                ><img src="img/youtube.svg" alt="youtube" class="footer__icon"
              /></a>
              <a href="#" class="footer__link"
                ><img
                  src="img/instagram.svg"
                  alt="instagram"
                  class="footer__icon"
              /></a>
            </div>
          </div>
          <!-- /.footer__social-network -->
          <div class="footer__list footer__legal">
            <h3 class="footer__title">LEGAL INFORMATION</h3>
            <ul class="footer__ul">
              <li class="footer__item">
                <a href="#" class="footer__link">Terms & Conditions</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Disclaimer</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Cancellation policy</a>
              </li>
              <li class="footer__item">
                <a href="#" class="footer__link">Privacy</a>
              </li>
            </ul>
          </div>
          <!-- /.footer__list -->
          <div class="footer__contact-details">
            <h3 class="footer__title footer__title_contact">Contact Details</h3>
            <div class="footer__text">
              Feel free to contact us by phone, email or by our contact form
            </div>
            <ul class="footer__ul">
              <li
                class="footer__item footer__information footer__information_map"
              >
                9748 Blossom Hill Rd undefined Lansing, Idaho 68545 United
                States
              </li>
              <li
                class="footer__item footer__information footer__information_call"
              >
                Tel (business hours) : 269 1500 <br />
                Tel (hotline) Monday - Saturday: 52-56-61-38 (08:00 am – 20:00
                pm)<br />
                Tel (hotline) Sunday: 52-56-61-38 (08:00 am – 14:00 pm)
              </li>
              <li
                class="footer__item footer__information footer__information_email"
              >
                cherly.lawson@example.com
              </li>
            </ul>
          </div>
          <!-- /.footer__contact-details -->
          <div class="footer__contact-form">
            <h3 class="footer__title footer__title_send">Send us a message</h3>
            <form action="send.php" method="POST" class="form footer-form">
              <div class="footer__input-group"><input
                type="text"
                class="input footer__input"
                placeholder="Your Full Name*"
                name="name"
                minlength="2"
                required
              /></div>
              <!-- /.footer__input-group -->
              <div class="footer__input-group">  
                <input
                type="tel"
                class="input footer__input phone"
                placeholder="Phone Number*"
                name="phone"
                required
              /></div>
              <textarea
                class="message footer__message"
                placeholder="Message"
                name="message"
              ></textarea>
              <div class="action">
                <button class="button footer__button" name="footer-button">
                  Send
                </button>
                <span class="footer__info">* Required Fields</span>
              </div>
            </form>
          </div>
          <ul class="footer__extra">
            <li class="footer__item_extra">
              <a href="#" class="footer__link">Disclaimer</a>
            </li>
            <li class="footer__item_extra">
              <a href="#" class="footer__link">Conditions of use</a>
            </li>
            <li class="footer__item_extra">
              <a href="#" class="footer__link">Cancellation policy</a>
            </li>
          </ul>
          <img src="img/pay.png" alt="payment" class="pay" />
        </div>
        <!-- /.footer-wrapper -->
      </div>
    </footer>
    <!-- /.footer -->
    <div class="modal" >
      <div class="modal__overlay"></div>
      <!-- /.modal__overlay -->
      <div class="modal__dialog" >
        <a href="" class="modal__close">
          <img src="img/close.svg" alt="icon: close" />
        </a>
        <h3 class="modal__title modal__title_send">Booking</h3>
        <form action="send.php" method="POST" class="form modal-form">
           <div class="modal__input-group">
           <input
            type="text"
            class="input modal__input"
            placeholder="Your Full Name*"
            name="name"
            minlength = "2"
            
            required
          />
          </div>
          <div class="modal__input-group">
          <input
            type="tel"
            class="input modal__input phone"
            placeholder="Phone Number*"
            name="phone"
            required
          /></div>
          <div class="modal__input-group">
          <input
            type="email"
            class="input modal__input"
            placeholder="Email*"
            name="email"
            required
          /></div>
          <textarea
            class="message modal__message"
            placeholder="Message"
            name="message"
          ></textarea>
          <div class="action modal-action">
            <button class="button modal__button" name="booking-button">
              Send
            </button>
            <span class="modal__info">* Required Fields</span>
          </div>
        </form>
      </div>
      <!-- /.modal__dialog -->
    </div>
    <!-- /.modal -->
    <script src="js/jquery-3.5.1.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/swiper-bundle.min.js"></script>
    <script src="js/jquery.validate.min.js"></script>
    <script src="js/jquery.mask.min.js"></script>
    <script src="js/aos.js"></script>
    <script src="js/main.js"></script>
    <script src="js/parallax.min.js"></script>
    </html>
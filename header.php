<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Best tour Plan - Hotel Booking</title>
    <link href="img/favicon.ico" rel="shortcut icon" type="image/x-icon" />
    <link
      href="https://fonts.googleapis.com/css2?family=Mulish:wght@400;600;700&family=Nunito:wght@400;600;700;800&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <link href="css/style.css" rel="stylesheet" />
    <script src="https://api-maps.yandex.ru/2.1/?apikey=34a96012-6aac-453d-a9b3-7faf311561d2&lang=ru_RU"></script>
  </head>
  <body>
    <header class="navbar navbar_mobile_fixed">
      <div class="container">
        <div class="navbar-top">
          <a href="index.php" class="logo">
            <img
              src="img/horizontal-logo.svg"
              alt="logo: Best Tour Plan"
              class="logo__image"
            />
          </a>
          <form
            action="#"
            class="search navbar__search navbar__search_mobile_hidden"
          >
            <input
              type="text"
              class="search__input"
              placeholder="Search Location"
            />
            <button class="search__button">
              <img src="img/search.svg" alt="icon: search" />
            </button>
          </form>
          <a class="user navbar__user navbar__user_mobile_hidden">
            <img
              src="img/user-avatar.jpg"
              alt="avatar: Nathan"
              class="user__avatar"
            />
            <span class="user__name">Nathan</span>
          </a>
          <!-- .user -->
          <button class="menu-button navbar-top__menu-button">
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
            <span class="menu-button__line"></span>
          </button>
          <!-- /.navbar-menu__menu-btn -->
        </div>
        <!-- .navbar-top -->
      </div>

      <!-- .container -->
      <nav class="navbar-bottom">
        <div class="container">
          <ul class="navbar-menu">
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <a class="user navbar__user navbar__user_mobile_visible">
                <img
                  src="img/user-avatar.jpg"
                  alt="avatar: Nathan"
                  class="user__avatar"
                />
                <span class="user__name user__name_light">Nathan</span>
              </a>
            </li>
            <li class="navbar-menu__item navbar-menu__item_mobile_visible">
              <form
                action="#"
                class="search navbar__search navbar__search_mobile_visible"
              >
                <input
                  type="text"
                  class="search__input"
                  placeholder="Search Location"
                />
                <button class="search__button">
                  <img src="img/search.svg" alt="icon: search" />
                </button>
              </form>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">All Deals</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotels</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Activities</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Hotel Day Packages</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Restaurants</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Events</a>
            </li>
            <li class="navbar-menu__item">
              <a href="#" class="navbar-menu__link">Rodrigues</a>
            </li>
          </ul>
        </div>
        <!-- /.container -->
      </nav>
    </header>
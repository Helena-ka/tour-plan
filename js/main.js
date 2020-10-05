$(document).ready(function () {
  var mySwiper = new Swiper(".hotel-slider", {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: ".hotel-slider__button__next",
      prevEl: ".hotel-slider__button__prev",
    },
    keyboard: {
      enabled: true,
    },
  });

  var reviewsSlider = new Swiper(".reviews-slider", {
    // Optional parameters
    loop: true,
    // Navigation arrows
    navigation: {
      nextEl: ".reviews-slider__button__next",
      prevEl: ".reviews-slider__button__prev",
    },
    keyboard: {
      enabled: true,
    },
  });

  var menuButton = $(".menu-button");
  menuButton.on('click', function () {
    $(".navbar-bottom").toggleClass("navbar-bottom_visible");
  });
  var modalButton = $('[data-toggle=modal]');
  var closeModalButton = $('.modal__close');
  modalButton.on('click', openModal);
  closeModalButton.on('click', closeModal);

  function openModal() {
    var modalOverlay = $(".modal__overlay");
    var modalDialog = $(".modal__dialog");
    modalOverlay.addClass("modal__overlay_visible");
    modalDialog.addClass("modal__dialog_visible");
  };
  var modalOverlay = $(".modal__overlay");
  var modalDialog = $(".modal__dialog");

  function closeModal(event) {
    event.preventDefault();
    modalOverlay.removeClass("modal__overlay_visible");
    modalDialog.removeClass("modal__dialog_visible");
  };
  $(document).on('keydown', function (e) {
    // ESCAPE key pressed
    if (e.keyCode == 27) {
      modalOverlay.removeClass("modal__overlay_visible");
      modalDialog.removeClass("modal__dialog_visible");
    }
  });
  //обработка форм
  $(".form").each(function () {
    $(this).validate({
      errorClass: "invalid",
      messages: {
        name: {
          required: "Provide a name",
          minlength: "Name must be at least 2 letters",
        },
        email: {
          required: "We need your email address to contact you",
          email: "Format: name@domain.com",
        },
        phone: {
          required: "Phone is required",
          minlength: "The number must be 12 digits",
          digits: "Please enter only numbers",
        },
      }
    });
  });
  $('.phone').mask('+7 (ZZZ) ZZZ-ZZ-ZZ', {
    translation: {
      'Z': {
        pattern: /[0-9]/,
        optional: true
      }
    }
  });
});
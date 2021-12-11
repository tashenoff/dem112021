function bsd(status) {
      var body = document.querySelector("body");

      var scrollTop = window.pageYOffset || document.documentElement.scrollTop;
      var scrollLeft = window.pageXOffset || document.documentElement.scrollLeft;

      window.onscroll = function () {};

      if (status === true) {
            // Check window scroll exists else use traditional method
            if (window.onscroll !== null) {
                  // if any scroll is attempted, set this to the previous value
                  window.onscroll = function () {
                        window.scrollTo(scrollLeft, scrollTop);
                  };
            } else {
                  //body.classList.add("fixed", "overflow-y-scroll");
            }
      } else {
            //body.classList.remove("fixed", "overflow-y-scroll");
            window.onscroll = function () {};
      }
}



var swiper = new Swiper(".mySwiper", {
      slidesPerView: 5,
      spaceBetween: 10,
      loop: true,
      navigation: {
            nextEl: '.arrow-right',
            prevEl: '.arrow-left',
      },

      breakpoints: {
            320: {
                  slidesPerView: 2,
                  spaceBetween: 5,
            },
            768: {
                  slidesPerView: 4,
                  spaceBetween: 10,
            },
            1024: {
                  slidesPerView: 5,
                  spaceBetween: 10,
            },
      },

      pagination: {
            el: ".pagination",
            clickable: true,
      },
});
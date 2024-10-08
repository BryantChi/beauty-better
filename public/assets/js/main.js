(function ($) {
    "use strict";
    // TOP Menu Sticky
    $(window).on("scroll", function () {
        var scroll = $(window).scrollTop();
        if (scroll < 400) {
            $("#sticky-header").removeClass("sticky");
            $("#back-top").fadeIn(500);
        } else {
            $("#sticky-header").addClass("sticky");
            $("#back-top").fadeIn(500);
        }
    });

    $(document).ready(function () {
        // mobile_menu
        var menu = $("ul#navigation");
        if (menu.length) {
            menu.slicknav({
                prependTo: ".mobile_menu",
                closedSymbol: "+",
                openedSymbol: "-",
            });
        }
        // blog-menu
        // $('ul#blog-menu').slicknav({
        //   prependTo: ".blog_menu"
        // });

        // review-active
        $(".slider_active").owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            autoplay: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            nav: true,
            dots: false,
            autoplayHoverPause: false,
            autoplaySpeed: 1500,
            responsive: {
                0: {
                    items: 1,
                    dots: false,
                },
                767: {
                    items: 1,
                    dots: false,
                },
                992: {
                    items: 1,
                },
            },
        });
        // review-active
        $(".testmonial_active").owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            autoplay: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>',
            ],
            nav: true,
            dots: false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1,
                    dots: false,
                    nav: false,
                },
                767: {
                    items: 1,
                    dots: false,
                    nav: false,
                },
                992: {
                    items: 1,
                    nav: false,
                },
                1200: {
                    items: 1,
                    nav: false,
                },
                1500: {
                    items: 1,
                },
            },
        });

        // for filter
        // init Isotope
        var $grid = $(".grid").isotope({
            itemSelector: ".grid-item",
            percentPosition: true,
            masonry: {
                // use outer width of grid-sizer for columnWidth
                columnWidth: 1,
            },
        });

        // filter items on button click
        $(".portfolio-menu").on("click", "button", function () {
            var filterValue = $(this).attr("data-filter");
            $grid.isotope({ filter: filterValue });
        });

        //for menu active class
        $(".portfolio-menu button").on("click", function (event) {
            $(this).siblings(".active").removeClass("active");
            $(this).addClass("active");
            event.preventDefault();
        });

        // wow js
        new WOW().init();

        // counter
        $(".counter").counterUp({
            delay: 10,
            time: 10000,
        });

        /* magnificPopup img view */
        $(".popup-image").magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });

        /* magnificPopup img view */
        $(".img-pop-up").magnificPopup({
            type: "image",
            gallery: {
                enabled: true,
            },
        });

        /* magnificPopup video view */
        $(".popup-video").magnificPopup({
            type: "iframe",
        });

        // scrollIt for smoth scroll
        $.scrollIt({
            upKey: 38, // key code to navigate to the next section
            downKey: 40, // key code to navigate to the previous section
            easing: "linear", // the easing function for animation
            scrollTime: 600, // how long (in ms) the animation takes
            activeClass: "active", // class given to the active nav element
            onPageChange: null, // function(pageIndex) that is called when page is changed
            topOffset: 0, // offste (in px) for fixed top navigation
        });

        // scrollup bottom to top
        $.scrollUp({
            scrollName: "scrollUp", // Element ID
            topDistance: "4500", // Distance from top before showing element (px)
            topSpeed: 300, // Speed back to top (ms)
            animation: "fade", // Fade, slide, none
            animationInSpeed: 200, // Animation in speed (ms)
            animationOutSpeed: 200, // Animation out speed (ms)
            scrollText: '<i class="fa fa-angle-double-up"></i>', // Text for element
            activeOverlay: false, // Set CSS color to display scrollUp active point, e.g '#00FFFF'
        });

        // blog-page

        //brand-active
        $(".brand-active").owlCarousel({
            loop: true,
            margin: 30,
            items: 1,
            autoplay: true,
            nav: false,
            dots: false,
            autoplayHoverPause: true,
            autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                767: {
                    items: 4,
                },
                992: {
                    items: 7,
                },
            },
        });

        // blog-dtails-page

        //project-active
        $(".project-active").owlCarousel({
            loop: true,
            margin: 30,
            items: 1,
            // autoplay:true,
            navText: [
                '<i class="Flaticon flaticon-left-arrow"></i>',
                '<i class="Flaticon flaticon-right-arrow"></i>',
            ],
            nav: true,
            dots: false,
            // autoplayHoverPause: true,
            // autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                767: {
                    items: 1,
                    nav: false,
                },
                992: {
                    items: 2,
                    nav: false,
                },
                1200: {
                    items: 1,
                },
                1501: {
                    items: 2,
                },
            },
        });

        if (document.getElementById("default-select")) {
            $("select").niceSelect();
        }

        //about-pro-active
        $(".details_active").owlCarousel({
            loop: true,
            margin: 0,
            items: 1,
            // autoplay:true,
            navText: [
                '<i class="ti-angle-left"></i>',
                '<i class="ti-angle-right"></i>',
            ],
            nav: true,
            dots: false,
            // autoplayHoverPause: true,
            // autoplaySpeed: 800,
            responsive: {
                0: {
                    items: 1,
                    nav: false,
                },
                767: {
                    items: 1,
                    nav: false,
                },
                992: {
                    items: 1,
                    nav: false,
                },
                1200: {
                    items: 1,
                },
            },
        });
    });
    //------- Mailchimp js --------//
    function mailChimp() {
        $("#mc_embed_signup").find("form").ajaxChimp();
    }
    mailChimp();

    // Search Toggle
    $("#search_input_box").hide();
    $("#search").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });
    $("#close_search").on("click", function () {
        $("#search_input_box").slideUp(500);
    });
    // Search Toggle
    $("#search_input_box").hide();
    $("#search_1").on("click", function () {
        $("#search_input_box").slideToggle();
        $("#search_input").focus();
    });

    /**
   * Easy selector helper function
   */
  const select = (el, all = false) => {
    el = el.trim();
    if (all) {
      return [...document.querySelectorAll(el)];
    } else {
      return document.querySelector(el);
    }
  };

  /**
   * Easy event listener function
   */
  const on = (type, el, listener, all = false) => {
    let selectEl = select(el, all);
    if (selectEl) {
      if (all) {
        selectEl.forEach((e) => e.addEventListener(type, listener));
      } else {
        selectEl.addEventListener(type, listener);
      }
    }
  };

  /**
   * Easy on scroll event listener
   */
  const onscroll = (el, listener) => {
    el.addEventListener("scroll", listener);
  };

  let navbarlinks = select("#navigation .scrollto", true);
  const navbarlinksActive = () => {
    let position = window.scrollY + 200;
    navbarlinks.forEach((navbarlink) => {
      if (!navbarlink.hash) return;
      let section = select(navbarlink.hash);
      if (!section) return;
      if (
        position >= section.offsetTop &&
        position <= section.offsetTop + section.offsetHeight
      ) {
        navbarlink.classList.add("active");
      } else {
        navbarlink.classList.remove("active");
      }
    });
  };
  window.addEventListener("load", navbarlinksActive);
  onscroll(document, navbarlinksActive);

  /**
   * Scrolls to an element with header offset
   */
  const scrollto = (el) => {
    let header = select("#sticky-header");
    let offset = header.offsetHeight;

    // if (!header.classList.contains("header-scrolled")) {
    //   offset -= 20;
    // }
    // $('.mobile_menu .slicknav_btn').click();

    let elementPos = select(el).offsetTop;
    window.scrollTo({
      top: elementPos - offset - 100,
      behavior: "smooth",
    });


  };

//   on(
//     "click",
//     ".scrollto",
//     function (e) {
//       if (select(this.hash)) {
//         e.preventDefault();

//         // let navbar = select("#navbar");
//         // if (navbar.classList.contains("navbar-mobile")) {
//         //   navbar.classList.remove("navbar-mobile");
//         //   let navbarToggle = select(".mobile-nav-toggle");
//         //   navbarToggle.classList.toggle("bi-list");
//         //   navbarToggle.classList.toggle("bi-x");
//         // }
//         scrollto(this.hash);

//       }
//     },
//     true
//   );

  window.addEventListener("load", () => {
    if (window.location.hash) {
      if (select(window.location.hash)) {
        scrollto(window.location.hash);
      }
    }
  });

    // Scroll to top button appear
    let scrollToTopVisible = false;
  document.addEventListener("scroll", () => {
    const scrollToTop = document.body.querySelector(".scroll-to-top");
    if (document.documentElement.scrollTop > 100) {
      if (!scrollToTopVisible) {
        fadeIn(scrollToTop);
        scrollToTopVisible = true;
      }
    } else {
      if (scrollToTopVisible) {
        fadeOut(scrollToTop);
        scrollToTopVisible = false;
      }
    }
  });

  function fadeOut(el) {
    el.style.opacity = 1;
    (function fade() {
      if ((el.style.opacity -= 0.1) < 0) {
        el.style.display = "none";
      } else {
        requestAnimationFrame(fade);
      }
    })();
  }

  function fadeIn(el, display) {
    el.style.opacity = 0;
    el.style.display = display || "block";
    (function fade() {
      var val = parseFloat(el.style.opacity);
      if (!((val += 0.1) > 1)) {
        el.style.opacity = val;
        requestAnimationFrame(fade);
      }
    })();
  }
})(jQuery);

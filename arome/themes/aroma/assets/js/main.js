(function ($) {
  "use strict";

  $(document).ready(function () {
    $("#mobile-menu-active").meanmenu({
      meanScreenWidth: "991",
      meanMenuContainer: ".mobile-menu-area .mobile-menu",
    });

    /* ----------------------------------------------
            nice-select-menu
        ---------------------------------------------- */
    $(".nice-select-menu").niceSelect();
    /*----------------------------
        4.1 Vertical-Menu Activation
        -----------------------------*/
    $(".categorie-title").on("click", function () {
      $(".categori-menu-list").slideToggle();
    });

    /* -------------------------------------------------------------
    nivoSlider
    -------------------------------------------------------------  */
    $('#mainSlider').nivoSlider({
      manualAdvance: false,
      directionNav: true,
      animSpeed: 500,
      slices: 18,
      pauseTime: 6000,
      pauseOnHover: false,
      controlNav: false,
      prevText: '<i class="fal fa-angle-left nivo-prev-icon"></i>',
      nextText: '<i class="fal fa-angle-right nivo-next-icon"></i>'
    });


    /* --------------------------------------------------------
            /**-----------------------------
             *  Navbar fix
             * ---------------------------*/
    $(document).on(
      "click",
      ".navbar-area .navbar-nav li.menu-item-has-children>a",
      function (e) {
        e.preventDefault();
      }
    );

    if ($(window).width() > 992) {
      var navOne = $(".nav-style-01-wrap"),
        navOneHeight = navOne.outerHeight();
      navOne.css("height", navOneHeight + "px");
    }

    /**-----------------------------
     * Background Image -***
     * ---------------------------*/
    var $backgroundImage = $(".bg-image");
    $backgroundImage.each(function () {
      var $this = $(this),
        $bgImage = $this.data("bg");
      $this.css("background-image", "url(" + $bgImage + ")");
    });

    /*--------------------
           wow js init
       ---------------------*/
    new WOW().init();

    /*-------------------------
            magnific popup activation
        -------------------------*/
    $(".video-play-btn,.video-popup,.small-vide-play-btn").magnificPopup({
      type: "video",
    });

    /*------------------
           back to top
       ------------------*/
    $(document).on("click", ".back-to-top", function () {
      $("html,body").animate({
        scrollTop: 0,
      },
        2000
      );
    });

    /*------------------------------
           counter section activation 
       -------------------------------*/
    var counternumber = $(".count-num");
    counternumber.counterUp({
      delay: 20,
      time: 3000,
    });

    /* --------------------------------------------------
            Gallery  
        ---------------------------------------------------- */
    var $galleryFilterArea = $(".product-gallery-filter-area"),
      $galleryFilterMenu = $(".gallery-filter-menu");
    /*Filter*/
    $galleryFilterMenu.on("click", "button, a", function () {
      var $this = $(this),
        $filterValue = $this.attr("data-filter");
      $galleryFilterMenu.find("button, a").removeClass("active");
      $this.addClass("active");
      $galleryFilterArea.isotope({
        filter: $filterValue
      });
    });
    /*Grid*/
    $galleryFilterArea.each(function () {
      var $this = $(this),
        $galleryFilterItem = ".aunter-product-gallery-item";
      $this.imagesLoaded(function () {
        $this.isotope({
          itemSelector: $galleryFilterItem,
          percentPosition: true,
          masonry: {
            columnWidth: ".product-gallery-sizer",
          },
        });
      });
    });

    /* -------------------------------------------------
         Mobile Menu
        ------------------------------------------------- */
    $(".herboil__navbar-area nav").meanmenu({
      meanScreenWidth: "991",
      meanMenuContainer: ".mobile-menu",
    });

    /* --------------------------------------------------------------------
            Slider Active (home 1 slider)
        -------------------------------------------------------------------- */
    // $(".herboil__slider-active").slick({
    //   dots: false,
    //   arrows: true,
    //   infinite: true,
    //   autoplay: true,
    //   autoplaySpeed: 3000,
    //   speed: 300,
    //   slide: 'div',
    //   slidesToShow: 1,
    //   slidesToScroll: 1,
    //   pauseonDothover: true,
    //   cssEase: 'linear',
    //   prevArrow: '<a class="slick-prev " ><i class="fa fa-angle-left"></i></a>',
    //   nextArrow:
    //     '<a class="slick-next " ><i class="fa fa-angle-right"></i></a>',
    //   responsive: [
    //     {
    //       breakpoint: 1024,
    //       setting: {
    //         dots: true,
    //         arrows: true,
    //       },
    //     },

    //     {
    //       breakpoint: 992 /* 768 - 992 */,
    //       settings: {
    //         dots: false,
    //         arrows: true,
    //       },
    //     },

    //     {
    //       breakpoint: 768,
    //       setting: {
    //         dots: false,
    //       },
    //     },

    //     {
    //       breakpoint: 600,
    //       settings: {
    //         dots: false,
    //       },
    //     },
    //     {
    //       breakpoint: 480,
    //       settings: {
    //         dots: false,
    //       },
    //     },
    //   ],
    // });
    /* -------------------------------------------------------------------
            Animation Text
            ----------------------------------------------------------------
        */

    /* --------------------------------------------------------------------- 
            Multi Page Animation
            --------------------------------------------------------------------
        */

    /* --------------------------------------------------------------------
            Product Active
        -------------------------------------------------------------------- */
    $(".product-slider-active").slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 1,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
      responsive: [{
        breakpoint: 1200 /* 991 - 1200 */,
        settings: {
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 992 /* 768 - 992 */,
        settings: {
          arrows: true,
          dots: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          dots: false,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 575,
        settings: {
          arrows: false,
          dots: false,
          slidesToShow: 1,
        },
      },
      ],
    });

    /* --------------------------------------------------------------------
            Blog Active
        -------------------------------------------------------------------- */
    $(".latest-blog-active").slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 3,
      slidesToScroll: 1,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
      responsive: [{
        breakpoint: 1200 /* 991 - 1200 */,
        settings: {
          slidesToShow: 2,
          arrows: true,
          dots: true,
        },
      },
      {
        breakpoint: 992 /* 768 - 992 */,
        settings: {
          arrows: false,
          dots: true,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 1,
        },
      },
      {
        breakpoint: 575,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 1,
        },
      },
      ],
    });



    /* --------------------------------------------------------------------
            Brand Active
        -------------------------------------------------------------------- */
    $(".brand-active").slick({
      dots: true,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 6,
      slidesToScroll: 1,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
      responsive: [{
        breakpoint: 1200 /* 991 - 1200 */,
        settings: {
          slidesToShow: 4,
        },
      },
      {
        breakpoint: 992 /* 768 - 992 */,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 3,
        },
      },
      {
        breakpoint: 768,
        settings: {
          arrows: true,
          dots: true,
          slidesToShow: 2,
        },
      },
      {
        breakpoint: 575,
        settings: {
          dots: true,
          slidesToShow: 1,
        },
      },
      ],
    });

    /* --------------------------------------------------------------------
            Testimonial Active
        -------------------------------------------------------------------- */
    $(".testimonial-image-active").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: false,
      fade: true,
      asNavFor: ".testimonial-info-active",
    });
    $(".testimonial-info-active").slick({
      dots: false,
      arrows: true,
      infinite: true,
      speed: 300,
      slidesToShow: 1,
      slidesToScroll: 1,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
      asNavFor: ".testimonial-image-active",
    });

    /*----------------------
            Product Details Active
        -----------------------*/
    $(".product-details-large-img-active").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      fade: true,
      asNavFor: ".product-details-small-img-active",
    });
    $(".product-details-small-img-active").slick({
      slidesToShow: 4,
      slidesToScroll: 1,
      asNavFor: ".product-details-large-img-active",
      dots: false,
      arrows: false,
      vertical: true,
      focusOnSelect: true,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
      responsive: [{
        breakpoint: 1200,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 1024,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
        },
      },
      {
        breakpoint: 768,
        settings: {
          slidesToShow: 4,
          slidesToScroll: 1,
          vertical: false,
          centerMode: false,
        },
      },
      {
        breakpoint: 480,
        settings: {
          slidesToShow: 3,
          slidesToScroll: 1,
          vertical: false,
          centerMode: false,
        },
      },
      ],
    });

    /*----------------------
            Product Deal Active
        -----------------------*/
    $(".product-deal-img-active").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: false,
      dots: true,
      fade: true,
      asNavFor: ".product-deal-info-active",
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
    });
    $(".product-deal-info-active").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".product-deal-img-active",
      dots: false,
      arrows: false,
      vertical: true,
      focusOnSelect: true,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
      responsive: [{
        breakpoint: 1200,
        settings: {
          vertical: false,
        },
      },],
    });

    /*----------------------
            Product Deal Active ( Speacial Product )
        -----------------------*/
    $(".speacial-product-img-active").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      arrows: true,
      dots: false,
      asNavFor: ".speacial-product-info-active",
      fade: true,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
    });
    $(".speacial-product-info-active").slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      asNavFor: ".speacial-product-img-active",
      dots: false,
      arrows: false,
      vertical: false,
      focusOnSelect: true,
      prevArrow: '<a class="slick-prev"><i class="fa fa-angle-left"></i></a>',
      nextArrow: '<a class="slick-next"><i class="fa fa-angle-right"></i></a>',
    });

    /*----------------------
            Light Case
        -----------------------*/
    $("a[data-rel^=lightcase]").lightcase({
      transition: "scrollHorizontal",
      swipe: true,
      maxWidth: 1170,
      maxHeight: 600,
      slideshow: true,
    });

    /*----------------------------
            Quantity plus minus
        ------------------------------ */

    // $(".qtybutton").on("click", function () {
    //     var $button = $(this);
    //     var oldValue = $button.parent().find("input").val();
    //     if ($button.text() == "+") {
    //         var newVal = parseFloat(oldValue) + 1;
    //     }
    //     else {
    //         if (oldValue > 0) {
    //             var newVal = parseFloat(oldValue) - 1;
    //         }
    //         else {
    //             newVal = 0;
    //         }
    //     }
    //     $button.parent().find("input").val(newVal);
    // });

    /* ---------------------------------------------------------
            Price Slider
        --------------------------------------------------------- */
    $("#slider-range").slider({
      range: true,
      min: 50,
      max: 2000,
      values: [50, 999],
      slide: function (event, ui) {
        $("#amount").val("$" + ui.values[0] + " - $" + ui.values[1]);
      },
    });
    $("#amount").val(
      "$" +
      $("#slider-range").slider("values", 0) +
      " - $" +
      $("#slider-range").slider("values", 1)
    );

    /* ---------------------------------------------------------
            Current Year Copyright area
        --------------------------------------------------------- */
    $(".current-year").text(new Date().getFullYear());

    /* ---------------------------------------------------------
            Countdown
        --------------------------------------------------------- */
    $("[data-countdown]").each(function () {
      var $this = $(this),
        finalDate = $(this).data("countdown");
      $this.countdown(finalDate, function (event) {
        $this.html(
          event.strftime(
            '<span class="cdown days"><span class="time-count">%-D</span> <p>Days</p></span> <span class="cdown hour"><span class="time-count">%-H</span> <p>Hour</p></span> <span class="cdown minutes"><span class="time-count">%M</span> <p>Min</p></span> <span class="cdown second"> <span><span class="time-count">%S</span> <p>Sec</p></span>'
          )
        );
      });
    });

  });

  //define variable for store last scrolltop
  var lastScrollTop = "";

  $(window).on("scroll", function () {
    //back to top show/hide
    var ScrollTop = $(".back-to-top");
    if ($(window).scrollTop() > 1000) {
      ScrollTop.fadeIn(1000);
    } else {
      ScrollTop.fadeOut(1000);
    }

    /* --------------------------
         sticky menu activation   if ($(window).width() > 992) {
        ------------------------- */
    var st = $(this).scrollTop();
    var mainMenuTop = $(".navbar-area");
    if ($(window).width() > 992) {
      if ($(window).scrollTop() > 1000) {
        if (st > lastScrollTop) {
          // hide sticky menu on scrolldown
          mainMenuTop.removeClass("nav-fixed");
        } else {
          // active sticky menu on scrollup
          mainMenuTop.addClass("nav-fixed");
        }
      } else {
        mainMenuTop.removeClass("nav-fixed ");
      }
    }

    lastScrollTop = st;
  });

  $(window).on("load", function () {
    /*---------------------
            Nice Select ***
        ----------------------*/
    $(".nice-select").niceSelect();

    /*---------------------
            Instafeed ***
        ----------------------*/
    $(".instafeed").each(function () {
      var $this = $(this),
        $id = $this.find("ul").attr("id"),
        $limit = $this.data("limit"),
        $resolution = $this.data("resolution");
      if ($this.length) {
        var feed = new Instafeed({
          get: "user",
          userId: 28029060845,
          accessToken: "28029060845.1677ed0.7905220867f44db7aed3289c23f81609",
          target: $id,
          resolution: $resolution,
          limit: $limit,
          template: '<li><a href="{{link}}" target="_new"><img src="{{image}}" /><span class="insta-view"><i class="icon-Group-180"></i>View Post</span></a></li>',
        });
        feed.run();
      }
    });
  });
  /**------------------------------------ */
  let seemore = document.getElementsByClassName("see-more-ls");

  for (let index = 0; index < seemore.length; index++) {
    seemore[index].addEventListener("click", function () {
      let id_pro = this.dataset.pro;
      let product;
      $.request("Movie::onGetProduct", {
        data: {
          id: id_pro
        },
        success: (reponse) => {
          product = JSON.parse(reponse);
          window.location.href = `./product/${product.slug}`;
        },
      });
    });
  }

  /**------------------------------------ */
  let div = document.getElementsByClassName("pro");
  for (let index = 0; index < div.length; index++) {
    div[index].addEventListener("click", function () {
      let id_pro = this.dataset.pro;
      let elementSlider = document.getElementById("modal");
      let product = null;
      let offer = null;
      elementSlider.innerHTML = getModalSl(id_pro);
      $.request("Movie::onGetProduct", {
        data: {
          id: id_pro
        },
        beforeUpdate: function (reponse) {
          let data = reponse.replace("attachOne|", "");
          product = JSON.parse(data);
          $(".pro_img").attr("src", product.preview_image.path);
          $(".product_name").html(product.name);
          $(".seemore_pro").attr("href", `./product/${product.slug}`);
        },
      });
      $.request("Movie::onOffer", {
        data: {
          id: id_pro
        },
        beforeUpdate: function (reponse) {
          offer = JSON.parse(reponse);
          let price = offer.price_value.replace(".00", "");
          let sale = offer.old_price_value.replace(".00", "");
          $(".regular-price").html(price + " " + "VND");
          $(".buy-now").attr("onclick", `addCart('${offer.id}')`);

          if (offer.old_price_value != 0) {
            $(".price-sale").html(sale + " " + "VND");
          }
          $(`#modal${id_pro}`).modal("show");
        },
      });
    });
  }

  const getModalSl = (id_pro) => {
    const element = `
        <div class="modal fade" id="modal${id_pro}" tabindex="-1" role="dialog" aria-labelledby="modelTitleId" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <div class="carousel-inner">
                            <div class="carousel-item active">
                                <img class="d-block w-100 pro_img" />
                            </div>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6 col-xs-12">
                    <div class="info-product">
                        <h3 class="product_name"> </h3>
                        <p>
                            <span class="regular-price"> </span>
                            <del class="price price-sale"> </del>
                        </p>
                        <div class="product-short-des">
                            <p class="product_des"></p>
                        </div>
                        <div class="button-add">
                            <span class="input-number-decrement">–</span>
                            <input class="input-number" type="text" value="1" min="0" max="10">
                            <span class="input-number-increment">+</span>
                        </div>
                    </div>
                </div>
                <div class="col-12 text-center">
                    <div class="btn-cart">
                        <span class="buy-now">Mua hàng</span>
                    </div>

                    <div class="btn-cart">
                        <a class="read-more seemore_pro">Tìm hiểu thêm</a>
                    </div>
                </div>
            </div>
        </div>
    </div>

        `;
    return element;
  };
  /**------------------------------------------------------------- */
  var wishlist = $(".makeWishlist");
  for (let index = 0; index < wishlist.length; index++) {
    const element = wishlist[index];
    const user = document.querySelector('meta[name="user"]').content;
    element.addEventListener("click", function () {
      const ip_pro = this.dataset.product;
      if (user == "") {
        alert("dang nhap de yeu");
        $(".makeWishlist").click(function () {
          $("#pop-up").modal("show");
        })
        return;
      }
      $.request("Wishlist::onMakeWishlish", {
        data: {
          id: ip_pro,
          user: user
        },
        beforeUpdate: function (response) {
          if (response.status === 200) {
            $(`.count-wishlist-${response.wishlist.product_id}`).html(response.count);
            $(`.heart-${response.wishlist.product_id}`).css('color', 'red')
          }
        },
      });
    });
  }

})(jQuery);

// Search 
$(".search-icon").on("click", function () {
  $("#search_widget").toggle();
});

// Collapse Text Page Home
// $(document).ready(function () {
//   var maxheight = 80;
//   var showText = "<div class='plus'> <i class='fas fa-plus-square'></i> Xem thêm </div>";
//   var hideText = "<div class='plus'> <i class='fas fa-minus-square'></i> Thu gọn </div>";

//   $('.item-excerpt').each(function () {
//     var text = $(this);
//     if (text.height() > maxheight) {
//       text.css({ 'overflow': 'hidden', 'height': maxheight + 'px' });

//       var link = $('<a href="#">' + showText + '</a>');
//       var linkDiv = $('<div></div>');
//       linkDiv.append(link);
//       $(this).after(linkDiv);

//       link.click(function (event) {
//         event.preventDefault();
//         if (text.height() > maxheight) {
//           $(this).html(showText);
//           text.css('height', maxheight + 'px');
//           text.css({
//             'transition': '0.4s'
//           });
//         } else {
//           $(this).html(hideText);
//           text.css('height', 'auto');
//           text.css({
//             'transition': '0.4s'
//           });
//         }
//       });
//     }
//   });
// });

// Input number minus plus page Product-page
$('input.input-qty').each(function () {
  var $this = $(this),
    qty = $this.parent().find('.is-form'),
    min = Number($this.attr('min')),
    max = Number($this.attr('max'))
  if (min == 0) {
    var d = 0
  } else d = min
  $(qty).on('click', function () {
    if ($(this).hasClass('minus')) {
      if (d > min) d += -1
    } else if ($(this).hasClass('plus')) {
      var x = Number($this.val()) + 1
      if (x <= max) d += 1
    }
    $this.attr('value', d).val(d)
  })
})

// Button search overlay
function openSearch() {
  document.getElementById("myOverlay").style.display = "block";

}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}


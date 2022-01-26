jQuery(document).ready(function ($) {
    
    "use strict";
    
  $('.gallery-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    centerMode: true,
    centerPadding: '150px',
    infinite: true,
    asNavFor: '.gallery-slider-nav',
    cssEase: 'linear',
    responsive: [{
      breakpoint: 959,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '120px',
        slidesToShow: 1
      }
    }, {
      breakpoint: 767,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '80px',
        slidesToShow: 1
      }
    }, {
      breakpoint: 639,
      settings: {
        arrows: false,
        centerMode: true,
        centerPadding: '40px',
        slidesToShow: 1
      }
    }]
  });
  $('.gallery-slider-nav').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    asNavFor: '.gallery-slider',
    dots: true,
    centerMode: true,
    focusOnSelect: true,
    cssEase: 'linear',
    centerPadding: '0px'
  });
  
    
    $('.sorting-btn').on('click', function () {
    $('.sorting-btn').removeClass('is-active');
    $(this).toggleClass('is-active');
  });
  $('.btn-whish').on('click', function () {
    $(this).toggleClass('is-active');
  });
  $('.sorting-btn.btn-list').on('click', function () {
    $('.products-items').removeClass('uk-child-width-1-2@s').addClass('uk-child-width-1-1');
    $('.products-items .product-item').addClass('product-item--list');
  });

  if ($('.sorting-btn.btn-list').hasClass('is-active')) {
    $('.products-items').removeClass('uk-child-width-1-2@s').addClass('uk-child-width-1-1');
    $('.products-items .product-item').addClass('product-item--list');
  }

  $('.sorting-btn.btn-grid').on('click', function () {
    $('.products-items').removeClass('uk-child-width-1-1').addClass('uk-child-width-1-2@s');
    $('.products-items .product-item').removeClass('product-item--list');
  });
    
    
  const mediaQueryDesktop = window.matchMedia('(max-width: 959px)');

  function handleDesktopChange(e) {
    if (e.matches) {
      $('.js-filter-content').hide();
    } else {
      $('.js-filter-content').show();
    }
  }

  mediaQueryDesktop.addListener(handleDesktopChange);
  handleDesktopChange(mediaQueryDesktop);
  $('.js-filter-more').on('click', function () {
    $(this).next('.js-filter-content').slideToggle();
  });

  function rargePrice() {
    var $range = $("#range-price");
    var $inputFrom = $("#range-price-from");
    var $inputTo = $("#range-price-to");
    var instance;
    var min = 0;
    var max = 150000;
    var from = 3500;
    var to = 120000;
    $range.ionRangeSlider({
      skin: "round",
      type: "double",
      min: min,
      max: max,
      from: from,
      to: to,
      hide_min_max: true,
      hide_from_to: true,
      onStart: updateInputs,
      onChange: updateInputs,
      onFinish: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
      from = data.from;
      to = data.to;
      $inputFrom.prop("value", from);
      $inputTo.prop("value", to);
    }

    $inputFrom.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < min) {
        val = min;
      } else if (val > to) {
        val = to;
      }

      instance.update({
        from: val
      });
      $(this).prop("value", val);
    });
    $inputTo.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < from) {
        val = from;
      } else if (val > max) {
        val = max;
      }

      instance.update({
        to: val
      });
      $(this).prop("value", val);
    });
  }

  rargePrice();

  function rargeMileage() {
    var $range = $("#range-mileage");
    var $inputFrom = $("#range-mileage-from");
    var $inputTo = $("#range-mileage-to");
    var instance;
    var min = 0;
    var max = 8000;
    var from = 1000;
    var to = 5000;
    $range.ionRangeSlider({
      skin: "round",
      type: "double",
      min: min,
      max: max,
      from: from,
      to: to,
      hide_min_max: true,
      hide_from_to: true,
      onStart: updateInputs,
      onChange: updateInputs,
      onFinish: updateInputs
    });
    instance = $range.data("ionRangeSlider");

    function updateInputs(data) {
      from = data.from;
      to = data.to;
      $inputFrom.prop("value", from);
      $inputTo.prop("value", to);
    }

    $inputFrom.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < min) {
        val = min;
      } else if (val > to) {
        val = to;
      }

      instance.update({
        from: val
      });
      $(this).prop("value", val);
    });
    $inputTo.on("change", function () {
      var val = $(this).prop("value"); // validate

      if (val < from) {
        val = from;
      } else if (val > max) {
        val = max;
      }

      instance.update({
        to: val
      });
      $(this).prop("value", val);
    });
  }

  rargeMileage();
}); 

const mediaQueryTablet = window.matchMedia('(max-width: 768px)');

function handleTabletChange(e) {
  if (e.matches) {
    //console.log('Media Query 768!');
  }
}


    
    /////////////////////////////////////////////////////////////////
// Preloader
/////////////////////////////////////////////////////////////////


    var $preloader = $('#page-preloader'),
    $spinner   = $preloader.find('.spinner-loader');
    $spinner.fadeOut();
    $preloader.delay(50).fadeOut('slow');

mediaQueryTablet.addListener(handleTabletChange);
handleTabletChange(mediaQueryTablet);
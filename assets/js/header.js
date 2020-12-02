"use strict";

jQuery(function() {
  // ヘッダースクロール時固定
  let _window = jQuery(window),
  _header = jQuery(".fusion-header"),
  heroBottom;
  let isSwapLogo = false

  _window.on("scroll", function () {
    heroBottom = 74;
    if (_window.scrollTop() > heroBottom) {
      _header.addClass("-fixed");
      if(!jQuery(".fusion-logo-link").find(".header__fixedLogo") || !isSwapLogo) {
        jQuery(".fusion-logo-link").append('<img src="/wp-content/themes/Avada-Child-Theme/assets/images/logo_fixed-sp@2x.png" alt="" class="header__fixedLogo">')
        isSwapLogo = true
      }
    } else {
      if (!(jQuery("#trigger").hasClass("active"))) {
        _header.removeClass("-fixed");
        jQuery('.fusion-row').removeClass("-fixed");
        jQuery(".header__fixedLogo").remove()
        isSwapLogo = false
      }
    }
  });

  if(jQuery('.fusion-header').hasClass("-fixed")) {
    jQuery(".fusion-logo-link").append('<img src="/wp-content/themes/Avada-Child-Theme/assets/images/logo_fixed-sp@2x.png" alt="" class="header__fixedLogo">')
  }

  // spメニューOPEN
  jQuery(".header__trigger").on('click', function() {
    if ((jQuery(this)).hasClass("-opened")) {
      jQuery(".header__hammenuWrapper").fadeOut(300);
    } else {
      jQuery(".header__hammenuWrapper").fadeIn(300);
    }
    if (!(jQuery(".fusion-row").hasClass("-fixed"))) {
      jQuery(".fusion-row").addClass('-fixed');
      jQuery(".fusion-header").addClass('-fixed');
      if(!jQuery(".fusion-logo-link").find(".header__fixedLogo") || !isSwapLogo) {
        jQuery(".fusion-logo-link").append('<img src="/wp-content/themes/Avada-Child-Theme/assets/images/logo_fixed-sp@2x.png" alt="" class="header__fixedLogo">')
        isSwapLogo = true
      }
    } else {
      if (_window.scrollTop() < 74) {
        jQuery(".fusion-row").removeClass("-fixed");
        jQuery(".fusion-header").removeClass('-fixed');
        jQuery(".header__fixedLogo").remove()
        isSwapLogo = false
      }
    }
    jQuery(this).toggleClass('-opened')
    jQuery(".header__trigger").toggleClass('active');
  });
})
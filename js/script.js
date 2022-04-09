//link
jQuery('a[href^="#"]').on('click', function () {
  var id = jQuery(this).attr('href');
  var position = 0;
  if (id != '#') {
    position = jQuery(id).offset().top;
  }
  var header = jQuery('.header').innerHeight();
  jQuery('html, body').animate({
    scrollTop: position - header
  }, 300);
});

//to-top
jQuery(window).on('scroll', function () {
  if (500 < jQuery(this).scrollTop()) {
    jQuery('.to-top').addClass('is-show')
  } else {
    jQuery('.to-top').removeClass('is-show')
  };
});

//drawer
jQuery('.drawer-icon').on('click', function (e) {
  e.preventDefault();
  jQuery('.drawer-icon').toggleClass('is-active')
  jQuery('.drawer-content').toggleClass('is-active')
  jQuery('.drawer-background').toggleClass('is-active')
  jQuery('.header').toggleClass('is-active')
  jQuery('.header-left').toggleClass('is-active')
  jQuery('.footer-fixed').toggleClass('is-active')
  return false;
});

jQuery('.drawer-background').on('click', function () {
  jQuery('.drawer-icon').toggleClass('is-active')
  jQuery('.drawer-content').toggleClass('is-active')
  jQuery('.drawer-background').toggleClass('is-active')
  jQuery('.header').toggleClass('is-active')
  jQuery('.header-left').toggleClass('is-active')
  jQuery('.footer-fixed').toggleClass('is-active')
});

//tel link
jQuery(function() {
  var ua = navigator.userAgent;
  if(ua.indexOf('iPhone') > 0 || ua.indexOf('Android') > 0){
  $('.info-tel tel-num').each(function(){
  var str = $(this).text();
  $(this).html($('<a>').attr('href', 'tel:' + str.replace(/-/g, '')).append(str + '</a>'));
  });
  }
});
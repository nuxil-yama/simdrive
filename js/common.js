$(function () {
  if (!$('main').hasClass('top')) {
    $('.js-fade-in').css('opacity', '1');
  }
});

$(window).on('load resize', function () {
  if (window.matchMedia('(max-width: 1090px)').matches) {
    if ($('.header__menu-btn').hasClass('show')) {
      $('body').addClass('show');
    } else {
      $('.menu').hide();
    }

    $('.header__menu-btn').off('click');
    $('.header__menu-btn').click(function () {
      $('.header__menu-btn').toggleClass('show');
      $('body').toggleClass('show');
      $('.menu').fadeToggle(250);
    });

    $('.menu').off('click');
    $('.menu').click(function () {
      $('.header__menu-btn').toggleClass('show');
      $('body').toggleClass('show');
      $('.menu').fadeToggle(250);
    });

  } else {
    $('body').removeClass('show');
    $('.menu').show();
  }
});
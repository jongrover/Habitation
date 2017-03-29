$(function() {

  // Mobile Navigation

  var $window = $(window),
      $mainNav = $('.main-nav'),
      $mobileLink = $('.mobile-nav a'),
      $socialNav = $('.social-nav'),
      $shareLink = $('.share-icon a'),
      screenWidth = $window.outerWidth(),
      breakPoint1 = 728,
      breakPoint2 = 677;

  function checkSize() {
    if (screenWidth < breakPoint1) {
      $socialNav.hide();
    }
    else {
      $socialNav.removeAttr('style');
    }
    if (screenWidth < breakPoint2) {
      $mainNav.hide();
    }
    else {
      $mainNav.removeAttr('style');
    }
  }
  checkSize();

  $window.resize(function () {
    screenWidth = $window.outerWidth();
    // console.log(screenWidth);
    checkSize();
  });

  $mobileLink.click(function (event) {
    event.preventDefault();
    $mainNav.slideToggle(400);
  });

  $shareLink.click(function (event) {
    event.preventDefault();
    $socialNav.slideToggle(400);
  });

  // Language Switching
  $('[lang="zh"]').hide();

  $('.mobile-language-icon, .desktop-language-icon').click(function (event) {
    event.preventDefault();
    $('[lang="zh"]').toggle();
    $('[lang="en"]').toggle();
  });

});

$(function() {

  var $window = $(window),
      $mainNav = $('.main-nav'),
      $mobileLink = $('.mobile-nav a'),
      $socialNav = $('.social-nav'),
      $shareLink = $('.share-icon a'),
      screenWidth = $window.outerWidth(),
      breakPoint1 = 713,
      breakPoint2 = 662;

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

});

$(function () {

  var $accordion = $('.accordion'),
      $panel = $accordion.find('.panel'),
      panelCount = $panel.length,
      panelWidth = 100 / panelCount;
      accordionWidth = $accordion.width(),
      animateSpeed = 400;

  $panel.css({'width': panelWidth+"%"});

  $panel.click(function () {
    var $selPanel = $(this),
        $nonSelPanels = $panel.not($selPanel),
        $selImg = $selPanel.find('img'),
        selImgWidth = $selImg.width(),
        nonSelPanelsWidth = (accordionWidth - selImgWidth) / (panelCount - 1);
    $nonSelPanels.removeClass('expanded').addClass('collapsed').animate({'width': nonSelPanelsWidth}, animateSpeed);
    $selPanel.removeClass('collapsed').addClass('expanded').animate({'width': selImgWidth}, animateSpeed);
  });
});

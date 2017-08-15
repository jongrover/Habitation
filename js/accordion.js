$(document).ready(function () {

  var $accordion = $('.accordion'),
      $panel = $accordion.find('.panel'),
      $img = $panel.find('img'),
      panelCount = $panel.length,
      panelWidth = 100 / panelCount,
      animateSpeed = 400,
      maxAccordionWidth = 1280,
      accordionWidth,
      imgWidth,
      originImgWidth = [];

  $img.hide();
  $accordion.append('<img src="../images/loading_image.gif" class="load-animation" style="display: block; margin: 0 auto; width: 200px">');

  $(window).on('load', function () {

    $('.load-animation').hide();
    $img.show();

    $img.each(function(i,img) {
      originImgWidth[i] = $(img).width();
    });

    function setWidths() {
      accordionWidth = $accordion.width();
      $img.each(function(i,img) {
        imgWidth = (originImgWidth[i] * accordionWidth) / maxAccordionWidth;
        $(img).width(imgWidth);
      });
    }
    setWidths();
    $(window).resize(setWidths);

    $panel.css({'width': panelWidth+"%"});

    $panel.click(function () {
      var $selPanel = $(this),
          $nonSelPanels = $panel.not($selPanel),
          $selImg = $selPanel.find('img'),
          $nonSelImg = $img.not($selImg),
          selImgWidth = $selImg.width(),
          selPanelPercent = ((selImgWidth / accordionWidth) * 100),
          nonSelPanelsPercent = ((100 - selPanelPercent) / (panelCount - 1));
      $nonSelPanels.removeClass('expanded').addClass('collapsed').animate({'width': nonSelPanelsPercent+"%"}, animateSpeed);
      $selPanel.removeClass('collapsed').addClass('expanded').animate({'width': selPanelPercent+"%"}, animateSpeed);
    });

  });

});

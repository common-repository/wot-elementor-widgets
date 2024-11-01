jQuery(window).on('elementor/frontend/init', function () {
    equalheight = function (container) {
    var currentTallest = 0,
      currentRowStart = 0,
      rowDivs = new Array(),
      $el,
      topPosition = 0;
    jQuery(container).each(function () {
      $el = jQuery(this);
      jQuery($el).height("auto");
      topPostion = $el.position().top;
      if (currentRowStart != topPostion) {
        for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
          rowDivs[currentDiv].height(currentTallest);
        }
        rowDivs.length = 0; // empty the array
        currentRowStart = topPostion;
        currentTallest = $el.outerHeight();
        rowDivs.push($el);
      } else {
        rowDivs.push($el);
        currentTallest =
          currentTallest < $el.outerHeight() ? $el.outerHeight() : currentTallest;
      }
      for (currentDiv = 0; currentDiv < rowDivs.length; currentDiv++) {
        rowDivs[currentDiv].height(currentTallest);
      }
    });
  };
  
  
  elementorFrontend.hooks.addAction('frontend/element_ready/wot_post_slider.default', function ($scope) {
      var widgetId = $scope.data('id'); 
      var $slider = $scope.find('.wot-post-slider');
      $slider.addClass('wot-post-slider-' + widgetId);
      if ($slider.length > 0) {
          var swiper = new Swiper('.wot-post-slider-' + widgetId, {
              spaceBetween: 30,
              effect: 'fade',
              loop: true,
              mousewheel: {
                  invert: false,
              },
              pagination: {
                  el: '.wot-post-slider-' + widgetId + ' .wot-post-slider-pagination',
                  clickable: true,
              }
          });
      }
      equalheight(".wot-post-slider-item");
  });
});

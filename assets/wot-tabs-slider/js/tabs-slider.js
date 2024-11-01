let slideIndex;
let widgetID;

function initTabsSlider(widgetID) {

    var tabSlider = jQuery(`[data-id="${widgetID}"] .wot-tab-slider`);
    var prevIcon = tabSlider.attr('data-prev-icon');
    var nextIcon = tabSlider.attr('data-next-icon');

    var slide = slideIndex || 0;
    // Initialize left slider
    jQuery(`[data-id="${widgetID}"] .wot-tab-slider-left`).not('.slick-initialized').slick({
        vertical: true,
        infinite: true,
        centerMode: true,
        centerPadding: "0",
        arrows: true,
        verticalSwiping: true,
        slidesPerColumn: 3,
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: `[data-id="${widgetID}"] .wot-tab-slider-right`,
        focusOnSelect: true,
        initialSlide: slide,
        prevArrow: prevIcon.endsWith('.svg') ? '<div type="button" class="slick-up"><img src="' + prevIcon + '" alt="Previous"></div>' : '<div type="button" class="slick-up"><i class="' + prevIcon + '"></i></div>',
        nextArrow: nextIcon.endsWith('.svg') ? '<div type="button" class="slick-down"><img src="' + nextIcon + '" alt="Next"></div>' : '<div type="button" class="slick-down"><i class="' + nextIcon + '"></i></div>',
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    vertical: false,
                    slidesToShow: 1,
                    slidesPerColumn: 1,
                    verticalSwiping: false,
                    dots: true,
                }
            }
        ]
    });

    // Initialize right slider
    jQuery(`[data-id="${widgetID}"] .wot-tab-slider-right`).not('.slick-initialized').slick({
        vertical: true,
        infinite: true,
        arrows: false,
        slidesPerRow: 1,
        slidesToShow: 1,
        initialSlide: slide,
        asNavFor: `[data-id="${widgetID}"] .wot-tab-slider-left`,
        draggable: false,
        responsive: [
            {
                breakpoint: 992,
                settings: {
                    vertical: false,
                    adaptiveHeight: true,
                }
            }
        ]
    });

    // Assigning equal height to all slides
    let allSlides = document.querySelectorAll(`[data-id="${widgetID}"] .wot-tab-slider-left .wot-tab-slider-card-inner`);
    let curSlideHeight, maxSlideHeight = 0, finalSlideHeight;

    allSlides.forEach((slide) => {
        curSlideHeight = slide.offsetHeight;
        finalSlideHeight = curSlideHeight > maxSlideHeight ? curSlideHeight : maxSlideHeight;
    });

    allSlides.forEach((slide) => {
        slide.style.height = `${finalSlideHeight}px`;
    });
}

if (typeof elementor !== "undefined" && typeof elementorFrontend !== "undefined") {
    elementorFrontend.hooks.addAction('frontend/element_ready/wot_tabs_slider.default', function ($scope) {
        widgetID = $scope.data('id');
        initTabsSlider(widgetID);
    });

    elementorFrontend.hooks.addAction('frontend/element_ready/widget', function ($scope) {
        if ($scope.hasClass('elementor-widget-wot_tabs_slider')) {
            widgetID = $scope.data('id');
            initTabsSlider(widgetID);
        }
    });
} else {
    setTimeout(() => {
        const widgetElements = jQuery('.elementor-widget-wot_tabs_slider');
        widgetElements.each(function () {
            widgetID = jQuery(this).data('id');
            initTabsSlider(widgetID);
        });
    }, 1000);
}

jQuery(window).on('elementor/frontend/init', function () {
    elementorFrontend.hooks.addAction('frontend/element_ready/wot_tabs_slider.default', function ($scope) {
        widgetID = $scope.data('id');
        initTabsSlider(widgetID);
        $scope.on('destroy', function () {
            var $element = $scope.find('.wot-tabs-slider');
            if ($element.hasClass('slick-initialized')) {
                $element.slick('unslick');
            }
        });
    });
    
    if (elementorFrontend.isEditMode()) {
        elementor.hooks.addAction('panel/open_editor/widget/wot_tabs_slider', function (panel, model) {
            var $panel = panel.$el;
            function countSlide() {
                var $repeaterItems = $panel.find('.elementor-repeater-row-item-title');
                var $remove = $panel.find('.elementor-repeater-tool-remove');
                $repeaterItems.off('click');
                // console.log($repeaterItems.length);
                $repeaterItems.each(function (index) {
                    var $currentItem = jQuery(this);
                    $currentItem.on('click', function () {
                        slideIndex = index; // Update slideIndex on click
                        // console.log("Clicked slideIndex:", slideIndex);
                    });
                });
            
                $repeaterItems.each(function (index) {
                    var $currentItem = jQuery(this);
                    var $editableControls = $currentItem.closest(".elementor-repeater-fields").find(".elementor-repeater-row-controls.editable");
                    if ($editableControls.length > 0) {
                        slideIndex = index; // Update slideIndex if .editable class is found
                        // console.log("Editable control found, slideIndex:", slideIndex);
                    }
                });
                if ($repeaterItems.length <= 4) {
                    $remove.prop('disabled', true);  
                } else {
                    $remove.prop('disabled', false);
                }
            }
            
            countSlide();

            var observer = new MutationObserver(function (mutations) {
                mutations.forEach(function (mutation) {
                    if (mutation.addedNodes.length) {
                        countSlide();
                    }
                });
            });
            var $targetNode = $panel.find(".elementor-repeater-fields-wrapper");
            observer.observe($targetNode[0], {
                childList: true,
                subtree: true
            });
        });
    }
    
    elementorFrontend.hooks.addAction('panel/open_editor/widget/wot_tabs_slider', function ($scope) {
        var $element = $scope.find('.wot-tabs-slider');
        widgetID = $scope.data('id');
        if ($element.hasClass('slick-initialized')) {
            $element.slick('unslick');
        }
        initTabsSlider(widgetID);
    });
});

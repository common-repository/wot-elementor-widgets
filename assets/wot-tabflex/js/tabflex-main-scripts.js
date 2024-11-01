jQuery(document).ready(function ($) {
    function tabFlexInitTabsContainers() {
        $("[id^='tabFlex_TabMainContainer']").each(function () {
            var $tabFlexContainer = $(this);
            var $tabFlex_tabHeads = $tabFlexContainer.find(".tabFlex_tabHead");
            var $tabFlexNumTabs = $tabFlex_tabHeads.length;
            $tabFlexContainer.find(".tabFlex_tabContentPart .tabFlex_showAllTabContent:first-child").addClass("tabFlex_showTabContent");
            $tabFlexContainer.find(".tabFlex_tabsToggle li:nth-child(1) .tabFlex_tabHead").addClass("tabFlex_TabActive");
            $tabFlexContainer.find(".tabFlex_tabsTop").on("click", ".tabFlex_tabHead", function (e) {
                e.preventDefault();
                $tabFlexContainer.find(".tabFlex_tabHead").removeClass("tabFlex_TabActive");
                $tabFlexContainer.find(".tabFlex_showAllTabContent").removeClass("tabFlex_showTabContent");
                $(this).addClass("tabFlex_TabActive");
                $tabFlexContainer.find($(this).attr("data-tabid")).addClass("tabFlex_showTabContent");

                if ($(window).width() < 768) {
                    var tabText = $tabFlexContainer.find(".tabFlex_tabHead.tabFlex_TabActive .tabFlex_TabHeadTitle").text();
                    $tabFlexContainer.find(".tabFlex_expandTabb").text(tabText);
                }
            });

            if ($(window).width() < 768) {
                $tabFlexContainer.find(".tabFlex_expandTabb").off("click").on("click", function () {
                    var $tabFlex_tabsToggle = $(this).closest('.tabFlex_tabsToggle');
                    $(this).next($tabFlex_tabsToggle).slideToggle();
                    $(this).toggleClass("change");
                    $tabFlex_tabsToggle.siblings().slideUp().siblings('.tabFlex_expandTabb').removeClass('change');
                });

                $tabFlexContainer.find(".tabFlex_tabHead").on("click", function () {
                    $(this).parents(".tabFlex_tabsToggle").slideUp();
                    $('.tabFlex_expandTabb').toggleClass("change");
                });
            }
            if ($tabFlexNumTabs > 4 && $(window).width() >= 768) {
                $tabFlexContainer.find(".tabFlex_vertical ul").addClass("tabFlex_verticalScrollable");
                $tabFlexContainer.find(".tabFlex_horizontal ul").addClass("tabFlex_horizontalScrollable");
            }
        });

    }
    if (typeof elementor !== "undefined" && typeof elementorFrontend !== "undefined") {
        elementorFrontend.hooks.addAction('frontend/element_ready/wot_tabflex.default', function () {
            tabFlexInitTabsContainers();
        });

        elementorFrontend.hooks.addAction('frontend/element_ready/widget', function ($scope) {
            if ($scope.hasClass('elementor-widget-wot_tabflex')) {
                tabFlexInitTabsContainers();
            }
        });
    } else {
        tabFlexInitTabsContainers();
    }
});

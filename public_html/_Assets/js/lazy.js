$(document).ready(function () {

    function init() {
        setTimeout(function () {
            watchForLazyLoaders();
            showVisibleLazyLoaders();
        }, 500);
    }

    // initiate events
    var eventShown = document.createEvent('Event');
    eventShown.initEvent('eventShown', true, true);

    $.fn.isInViewport = function () {
        var elementTop = $(this).offset().top;
        var elementBottom = elementTop + $(this).outerHeight();
        var viewportTop = $(window).scrollTop() + 100;
        var viewportBottom = viewportTop + $(window).height() - 200;
        return (
            elementBottom > viewportTop && elementTop < viewportBottom || (viewportTop <= 300 && elementTop < 300)
        )
    };

    function watchForLazyLoaders() {
        $(window).on("scroll", function () {
            $(".lazy-fade:not(.lazy-show)").each(function (index) {
                if ($(this).isInViewport()) {
                    $(this).addClass("lazy-show");
                    this.dispatchEvent(eventShown);
                }
            });

            if ($(".lazy-fade:not(.lazy-show)").length == 0) $(window).off("scroll");
        });
    }

    function showVisibleLazyLoaders() {
        $(".lazy-fade:not(.show)").each(function (index) {
            if ($(this).isInViewport()) {
                $(this).addClass("lazy-show");
                this.dispatchEvent(eventShown);
            }
        });
    }

    $('.lazy-count-up').on('eventShown', function () {

        var self = $(this);

        var targetNumStr = $(this).html();
        var targetNum = parseFloat(targetNumStr.replace(',', ''));

        var startNum = (targetNum - 20);
        var startNumStr = '';
        var ending = '';

        if ($(this).hasClass('lazy-count-percent')) {
            ending = '%';
        }
        else {
            ending = '';
        }

        var interval = setInterval(function () {
            startNumStr = startNum.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",") + ending;
            startNumStr = (startNum >= 0) ? startNumStr : 0;
            self.text(startNumStr);
            if (startNum >= targetNum) clearInterval(interval);
            startNum += 1;
        }, 50);
    });

    init();
});
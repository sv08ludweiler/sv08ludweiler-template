(function ($) {

    var init = function () {

        var navbar = $('.navbar');
        var navbar_extended = $('.navbar-extended');
        var subNavigation = $('.sub-navigation');

        if (subNavigation !== 'undefined') {

            subNavigation.pushpin({
                top: navbar.height() + $('.teaser-big-container').height(),
                offset: navbar.height(),
                pinCallback: function () {
                    $('main').css({'margin-top': subNavigation.height()})
                },
                releaseCallback: function () {
                    $('main').css({'margin-top': '0px'})
                }
            });
        }
        // subnavigation scrolling
        $('.scrollspy').scrollSpy({'scrollOffset': navbar.height() + subNavigation.height() + navbar_extended.height()});

    };

    $(document).ready(function () {
        // mobile navbar
        $(".button-collapse").sideNav({
            closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
            draggable: false
        });
        $('.materialboxed').materialbox();
        init();
        $('.carousel.carousel-slider').carousel({full_width: true});
    });

    var doit;
    $(window).on("resize", function () {

        clearTimeout(doit);
        doit = setTimeout(init , 200);
    });

})(jQuery);
$(document).ready(function () {
    $(document).on('click', '.hamberger-button', function (e) {
        $(".popup-mobile-menu").toggleClass("active");
    });

    $(".close-menu").on("click", function (e) {
        $(".popup-mobile-menu").removeClass("active");
        $(".popup-mobile-menu .mainmenu .has-droupdown > a")
            .siblings(".submenu, .mega-menu")
            .removeClass("active")
            .slideUp("400");
        $(".popup-mobile-menu .mainmenu .has-droupdown > a").removeClass("open");
    });

    $(".popup-mobile-menu .mainmenu .has-droupdown > a").on("click", function (e) {
        e.preventDefault();
        $(this).siblings(".submenu, .mega-menu").toggleClass("active").slideToggle("400");
        $(this).toggleClass("open");
    });
});
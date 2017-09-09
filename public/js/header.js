(function(init) {
    init(window.jQuery, window, document);
} (function($, window, document) {
    $(function() {
        
        //event hover on header
        $('ul.nav li.dropdown').hover(function () {
            $(this).find('.mega-dropdown-menu').stop(true, true).delay(100).fadeIn(200);
        }, function () {
            $(this).find('.mega-dropdown-menu').stop(true, true).delay(100).fadeOut(200);
        });
    });
}));
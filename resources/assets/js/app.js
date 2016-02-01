var app = app || {};

(function ($) {
    app.init = function () {
        this.menu.init();
    };

    $(function () {
        app.init();
    });
})(jQuery);

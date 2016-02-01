var app = app || {};

(function ($) {

    app.menu = new function () {

        this.init = function () {
            $('#top-menu .forums')
                .popup({
                        inline: true,
                        hoverable: true,
                        position: 'bottom left',
                        delay: {
                            show: 0,
                            hide: 600
                        }
                    }
                );
        };

    };
})(jQuery);

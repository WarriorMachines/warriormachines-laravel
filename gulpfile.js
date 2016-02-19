var elixir = require('laravel-elixir');
/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function (mix) {
    // Creates `resources/assets/sass-generated/app.css` from `resources/assets/sass/app.scss`.
    mix.sass('app.scss', 'resources/assets/gulp-generated');

    //  Merges and compiles all the files listed in this array to `public/css/all.css`.
    mix.styles([
        'resources/assets/gulp-generated/app.css'
    ], 'public/css/all.css', './');

    // Merges and compiles all the files listed in this array to `public/js/app.js`.
    mix.scripts([
        'node_modules/jquery/dist/jquery.js',
        'node_modules/tether/dist/js/tether.js',
        'node_modules/bootstrap/dist/js/bootstrap.js',
        'resources/assets/js/app.js',
        'resources/assets/js/components/*.js'
    ], 'public/js/all.js', './');

    // Versions all the files listed in this array.
    mix.version([
        'css/all.css',
        'js/all.js'
    ]);
});

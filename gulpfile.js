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
    // Creates `resources/css/app.css` from `resources/assets/sass/app.scss`.
    mix.sass('app.scss', 'resources/assets/sass-generated');

    //  Merges and compiles all the files listed in this array to `public/css/all.css`.
    mix.styles([
        'bower_components/semantic/dist/semantic.css',
        'resources/assets/sass-generated/app.css'
    ], 'public/css/all.css', './');

    // Merges and compiles all the files listed in this array to `public/js/app.js`.
    mix.scripts([
        'bower_components/jquery/dist/jquery.js',
        'bower_components/semantic/dist/semantic.js',
        'resources/assets/js/app.js'
    ], 'public/js/all.js', './');

    // Versions all the files listed in this array.
    mix.version([
        'css/all.css',
        'js/all.js'
    ]);

    // Copies semantic fonts to `public/fonts`.
    mix.copy('bower_components/semantic/dist/themes/default/assets/fonts', 'public/build/css/themes/default/assets/fonts');
});

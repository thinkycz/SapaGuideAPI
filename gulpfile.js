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

elixir(function(mix) {
    mix.sass('app.scss', 'resources/assets/css/app.css');

    mix.copy('vendor/components/jquery/jquery.min.js', 'resources/assets/js/jquery.min.js');
    mix.copy('vendor/twitter/bootstrap/dist/css/bootstrap.min.css', 'resources/assets/css/bootstrap.min.css');
    mix.copy('vendor/twitter/bootstrap/dist/js/bootstrap.min.js', 'resources/assets/js/bootstrap.min.js');
    mix.copy('vendor/twitter/bootstrap/dist/fonts', 'resources/assets/css/fonts');
    mix.copy('resources/assets/css/fonts', 'public/fonts');
    mix.copy('resources/assets/images', 'public/images');

    mix.stylesIn('resources/assets/css');

    mix.scripts([
        'jquery.min.js',
        'bootstrap.min.js',
        'sweetalert.min.js'
    ]);
});

const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css');

/// global css files
mix.styles('resources/css/bootstrap.css','public/css/bootstrap.min.css')
    .version();
mix.styles('resources/css/colors.css','public/css/colors.min.css')
    .version();
mix.styles('resources/css/components.css','public/css/components.min.css')
    .version();
mix.styles('resources/css/core.css','public/css/core.min.css')
    .version();

///charts js files


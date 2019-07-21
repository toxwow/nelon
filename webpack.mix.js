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
    .js('resources/js/user/index.js', 'public/js/user')
    .js('resources/js/index.js', 'public/js')
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/user/index.scss', 'public/css/user')
    .sass('resources/sass/user/home.scss', 'public/css/user')
    .sass('resources/sass/user/about.scss', 'public/css/user')
    .sass('resources/sass/user/contact.scss', 'public/css/user')
;

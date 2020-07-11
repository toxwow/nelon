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
    .js('resources/js/index.js', 'public/js')
    .js('resources/js/user/index.js', 'public/js/user')
    .js('resources/js/user/term.js', 'public/js/user')
    .js('resources/js/user/price.js', 'public/js/user')
    .js('resources/js/user/save.js', 'public/js/user')
    .js('resources/js/user/cafe.js', 'public/js/user')
    .js('resources/js/user/about.js', 'public/js/user')
    .js('resources/js/user/contact.js', 'public/js/user')
    .sass('resources/sass/index.scss', 'public/css')
    .sass('resources/sass/user/index.scss', 'public/css/user')
    .sass('resources/sass/user/save.scss', 'public/css/user')
    .sass('resources/sass/user/home.scss', 'public/css/user')
    .sass('resources/sass/user/about.scss', 'public/css/user')
    .sass('resources/sass/user/term.scss', 'public/css/user')
    .sass('resources/sass/user/price.scss', 'public/css/user')
    .sass('resources/sass/user/cafe.scss', 'public/css/user')
    .sass('resources/sass/user/contact.scss', 'public/css/user')
;

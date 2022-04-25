const mix = require('laravel-mix');
require('laravel-vue-i18n/mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

mix.js('resources/js/app.js', 'public/js')
    .vue(3)
    .i18n()
    .postCss('resources/css/bootstrap.min.css', 'public/css')
    .postCss('resources/css/fancybox.min.css', 'public/css')
    .postCss('resources/css/lineicons.css', 'public/css')
    .postCss('resources/css/odometer.min.css', 'public/css')
    // .postCss('resources/css/style.css', 'public/css')
    .sass('resources/css/style.scss', 'public/css')
    .postCss('resources/css/swiper.min.css', 'public/css')
    .postCss('resources/css/app.css', 'public/css', [
        //
    ])
    .version();

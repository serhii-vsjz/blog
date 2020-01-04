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

mix.scripts([
    'resources/js/modernizr.js',
    'resources/js/pace.min.js',
    'resources/js/jquery-3.2.1.min.js',
    'resources/js/plugins.js',
    'resources/js/main.js',
], 'public/js/all.js');

mix.styles([
    'resources/css/base.css',
    'resources/css/main.css',
    'resources/css/vendor.css'
], 'public/css/all.css');
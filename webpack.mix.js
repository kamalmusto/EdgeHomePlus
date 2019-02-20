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

mix
    .styles([
        'resources/css/bootstrap.css',
        'resources/css/all.css',
        'resources/css/bttn.min.css'
    ],'./public/css/app.css')
    .sass('resources/sass/app.scss', 'public/css')
    .js([
        'resources/js/jquery-3.3.1.min.js',
        'resources/js/all.js',
        'resources/js/bootstrap.js',
        'resources/js/jquery.nicescroll.js'
    ],'./public/js/app.js');

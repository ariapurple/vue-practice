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

let rootPath = 'public/dist/';

let jsPath = rootPath + 'js/';
let cssPath = rootPath + 'css/';

mix.js('resources/assets/js/app.js', jsPath)
    .sass('resources/assets/sass/app.scss', cssPath);

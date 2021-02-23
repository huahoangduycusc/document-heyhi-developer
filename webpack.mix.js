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
    .sass('resources/sass/app.scss', 'public/css')
    .sass('resources/sass/developers.scss', 'public/css/developers.convert.css');

// đặt tên file css có đuôi .convert.css để nhận diện file css này là file được convert ra từ scss để tránh nhầm lẫn và sửa trực tiếp vào nó.

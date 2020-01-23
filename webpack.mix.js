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
    .browserSync({
        proxy: 'http://localhost:8000',
        port: 3000,
        open: false,
        notify: false,
        // files: ['resources/**/*']
     })
    ;

//     mix.setPublicPath('public')
//     .js('resources/js/app.js', 'public/js')
//     .sass('resources/sass/app.scss', 'public/css')
//    .options({
//       processCssUrls: false
//     })
//    .browserSync({
//         proxy: 'localhost:8000',
//         port: 3000,
//         // files: ['resources/**/*']
//     });

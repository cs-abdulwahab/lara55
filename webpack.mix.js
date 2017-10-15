let mix = require('laravel-mix');

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

mix.js('resources/assets/js/app.js', 'public/js')
    .js('node_modules/icheck/icheck.js','public/js')
   .sass('resources/assets/sass/app.scss', 'public/css')
    //.copy('~node_modules/admin-lte/plugins/iCheck/all.css','public/css')
    .copy('node_modules/icheck/skins/','public/css');


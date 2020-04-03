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
mix.options({ processCssUrls: false });

mix.js('resources/js/app.js', 'public/js/app.js')
    .js('resources/js/admin.js', 'public/js/admin.js')
    .sass('resources/sass/app.scss', 'public/css/app.css')
    .sass('resources/sass/admin.scss', 'public/css/admin.css')
    .sass('resources/sass/auth.scss', 'public/css/auth.css')
    .sass('resources/sass/forms.scss', 'public/css/forms.css')
    .sass('resources/sass/news.scss', 'public/css/news.css')
    .sass('resources/sass/errorpages.scss', 'public/css/errorpages.css')
    .sass('resources/sass/businessquote.scss', 'public/css/businessquote.css')
    .sass('resources/sass/services.scss', 'public/css/services.css');

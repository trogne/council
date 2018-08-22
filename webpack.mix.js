let mix = require('laravel-mix');

require('laravel-mix-tailwind');

mix.disableSuccessNotifications();

mix
    .js('resources/assets/js/app.js', 'js')
    .sass('resources/assets/sass/app.scss', 'public/css')
    .tailwind()
    .browserSync('council.local');

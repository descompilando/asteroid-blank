const mix = require('laravel-mix');
const tailwindcss = require('tailwindcss');

mix.js('resources/js/app.js', 'public/js');
mix.less('resources/less/app.less', 'public/css')
    .options({
        postCss: [
            tailwindcss('tailwind.config.js')
        ],
    });
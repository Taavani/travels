const mix = require('laravel-mix');
require('@tinypixelco/laravel-mix-wp-blocks');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Sage application. By default, we are compiling the Sass file
 | for your application, as well as bundling up your JS files.
 |
 */

mix
    .setPublicPath('./public')
    .browserSync('https://travelstogreenland.dev.anu.gl.test/');

mix
    .sass('resources/styles/app.scss', 'styles')
    .sass('resources/styles/editor.scss', 'styles')
    .options({
        processCssUrls: false
    });

mix
    .js('resources/scripts/blocks/local-connection.js', 'scripts')
    .js('resources/scripts/blocks/new-itinerary.js', 'scripts')
    .js('resources/scripts/blocks/existing-products.js', 'scripts')
    .js('resources/scripts/blocks/centered-content.js', 'scripts')
    .js('resources/scripts/app.js', 'scripts')
    .js('resources/scripts/customizer.js', 'scripts')
    .blocks('resources/scripts/editor.js', 'scripts')
    .autoload({ jquery: ['$', 'window.jQuery'] })
    .extract();

mix
    .copyDirectory('resources/images', 'public/images')
    .copyDirectory('resources/fonts', 'public/fonts');

mix
    .sourceMaps()
    .version();

let mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for your application, as well as bundling up your JS files.
 |
 */


// Office
publicDir = '../../devsrv/franchise-boxing.test/public_html';

// Home
//publicDir = '../../Laravel-Projets/site.dev/public_html/wp-content/themes/mossebo';

// Test
//publicDir = 'dist/site';

//MAC CONFIG
mix.js('src/assets/js/app.js', publicDir + '/assets/js');
mix.sass('src/assets/sass/app.scss', publicDir + '/assets/css')
    .options({
        processCssUrls: false
    });
mix.sourceMaps();
mix.copyDirectory('src/assets/fonts', publicDir + '/assets/fonts');
mix.copyDirectory('src/assets/images', publicDir + '/assets/images');
mix.copyDirectory('src/template', publicDir);
mix.autoload({
    jquery: ['$', 'window.jQuery', 'jQuery']
});
mix.browserSync({
    proxy: {
        target: "https://franchise-boxing.test"
    }
});

mix.setResourceRoot(path.normalize(publicDir));
mix.setPublicPath(path.normalize(publicDir));


const { mix } = require('laravel-mix');
let LiveReloadPlugin = require('webpack-livereload-plugin');

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
   .sass('resources/assets/sass/app.scss', 'public/css');

mix.extract(['vue','axios','bootstrap-sass','lodash','materialize-css']);

mix.version();

mix.webpackConfig({
  plugins: [
    new LiveReloadPlugin()
  ]
});

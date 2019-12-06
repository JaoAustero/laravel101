const mix = require('laravel-mix');

require('laravel-mix-stylelint');

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

mix
    .js('resources/js/app.js', 'public/js')
    .sass('resources/sass/app.scss', 'public/css')
    .stylelint(
        {
            configFile: path.join(__dirname, '.stylelintrc.js'),
            context: './resources',
            failOnError: false,
            files: ['**/*.scss'],
            quiet: false,
            syntax: 'scss',
        }
    );
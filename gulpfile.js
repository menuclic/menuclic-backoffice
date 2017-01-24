const elixir = require('laravel-elixir');

require('laravel-elixir-vue-2');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.sass('app.scss')
    .less('style.less')
    .sass('login.scss', 'public/css/login.css')
    .webpack('app.js')
    .scripts([
        '../../../node_modules/jquery/dist/jquery.js',
        '../../../node_modules/bootstrap-sass/assets/javascripts/bootstrap.js',
        '../../../node_modules/angular/angular.js',
        'olnatura.js',
        'ngservice/**.js',
        'ngcontroller/**.js',
    ])
    .copy('node_modules/font-awesome/fonts', 'public/build/fonts')
    .version(['css/login.css', 'css/style.css', 'images/favicon.png', 'js/all.js'])
});

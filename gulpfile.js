var elixir = require('laravel-elixir');
var gulp        = require('gulp');
var browserSync = require('browser-sync').create();

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Less
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(function(mix) {
    mix.less('app.less');
    //mix.styles();
    mix.scripts([
    '../../assets/bower/jquery/dist/jquery.js',
    '../../assets/bower/bootstrap/dist/js/bootstrap.js',
    '../../assets/bower/slideout.js/dist/slideout.min.js'
], 'public/js/vendor.js');
});

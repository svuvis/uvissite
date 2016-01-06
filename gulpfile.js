var elixir = require('laravel-elixir');

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

elixir(function(mix) {
    mix.styles([
        'bootstrap.css',
        'font-awesome.min.css',
        'main.css',
        'charissa.css',
        'beta.css',
        'betatimeline.css',
        'component.css',
        'swipebox.css'
    ],'public/css/all.css');

    mix.styles([
        'bootstrap.css',
        'font-awesome.min.css',
        'ladda-themeless.min.css',
        'toastr.min.css',
        'redactor.css',
        'main.css',
        'charissa.css',
        'beta.css',
        'admin.css'
    ],'public/css/admin-all.css');

    mix.scripts([
        'jquery-2.1.0.min.js',
        'bootstrap.min.js',
        'twFetcher.js',
        'modernizr.min.js',
        'modernizr.custom.js',
        'grid.js',
        'jquery.mixitup.js',
        'ios-orientationchange-fix.js',
        'jquery.swipebox.min.js'
    ],'public/js/all.js');

    mix.scripts([
        'jquery-2.1.0.min.js',
        'bootstrap.min.js',
        'ios-orientationchange-fix.js',
        'redactor.js',
        'table.js',
        'video.js',
        'toastr.min.js',
        'spin.min.js',
        'ladda.min.js',
        'admin-uvis.js'
    ],'public/js/admin-all.js');

    mix.copy('resources/assets/fonts', 'public/fonts');
    mix.copy('resources/assets/img', 'public/img');
    mix.copy('resources/assets/files', 'public/files');
});

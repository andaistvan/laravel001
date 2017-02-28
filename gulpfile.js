var elixir = require('laravel-elixir');
require('laravel-elixir-livereload');

elixir.config.assetsPath = 'themes/ocms-laravel/assets/';
elixir.config.publicPath = 'themes/ocms-laravel/assets/compiled/';

elixir (function(mix){
   mix.sass('style.scss');

   mix.scripts([
      'materialize.min.js',
      'theme.js'
   ]);

   mix.livereload([
      'themes/ocms-laravel/assets/compiled/css/style.css',
      'themes/ocms-laravel/**/*.htm',
      'themes/ocms-laravel/assets/compiled/js/all.js',
   ])
})

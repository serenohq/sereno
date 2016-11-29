var gulp = require('gulp');
var elixir = require('laravel-elixir');
var argv = require('yargs').argv;

elixir.config.publicPath = 'content/assets';

elixir(function (mix) {
  var env = argv.e || argv.env || 'dev';

  mix.sass(['app.scss'])
      .browserify('app.js')
      .exec('php sereno build --env=' + env, [
        './blog/*',
        './docs/*',
        './content/*',
        './blog/**/*',
        './docs/**/*',
        './content/**/*',
        './config*.php'
      ])
      .browserSync({
        server: {
          baseDir: 'public'
        },
        proxy: null,
        files: ['public/**/*']
      });
});

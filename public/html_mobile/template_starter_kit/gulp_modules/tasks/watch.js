import gulp from 'gulp';
import nodemon from 'nodemon';
import runSequence from 'gulp4-run-sequence';
/* --------------------------
  ----- watch in dev mode -----
  -------------------------- */
gulp.task('watch', () => {
  gulp.watch(
    [path.dev.styles + '*.scss', path.dev.styles + 'blocks/*.scss'],
      gulp.series['scss-lint'],
    event => nodemon.emit('restart')
  );
  gulp.watch(path.dev.views + '**/*', gulp.series['pug-linter'], event =>
    nodemon.emit('restart')
  );
  gulp.watch(
    [
      path.dev.scripts + 'dev/**/*.js'
    ],
      gulp.series['jshint'],
    event => nodemon.emit('restart')
  );
});

/* --------------------------
  ---- watch in build mode ----
  -------------------------- */
gulp.task('watch-build',  gulp.series['browserSync'], () => {
  // STYLES
  gulp.watch(
    [path.dev.styles + '**/*', path.dev.styles + 'blocks/*'],
      gulp.series['styles-build']
  );
  // VIEWS
  gulp.watch([path.dev.views + '**/*', './*.pug'], () => {
    runSequence('views', 'browsersync-reload');
  });
  // SCRIPTS
  gulp.watch(path.dev.scripts + '**/*', () => {
    runSequence('scripts', 'usemin-build');
  });
  // IMAGES
  gulp.watch(path.dev.images + '**/*', () => {
    runSequence('images');
  });
  // FONTS
  gulp.watch(path.dev.fonts + '**/*', () => {
    runSequence('fonts', 'browsersync-reload');
  });
});

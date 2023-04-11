// Task to build project
import runSequence from 'gulp4-run-sequence';
import gulp from 'gulp';

// gulp.task('default', function(done) {
//   runSequence(['nodemon', 'watch'], done);
// });


gulp.task('build', function(done) {
  runSequence([
    'clean:public',
    'scripts',
    'js-pages',
    'copy-data',
    'images',
    'fonts',
    'styles',
    'views',
    'usemin-build',
    'inlinesource',
    'clean-js-scss',
    'browserSync',
    ],
    done
  );
});

gulp.task('build-only', function(done) {
  runSequence(
    'clean:public',
    'scripts',
    'js-pages',
    'copy-data',
    'images',
    'fonts',
    'styles',
    'views',
    'usemin-build',
    'inlinesource',
    'clean-js-scss',
    done
  );
});

gulp.task('build-css', function(done) {
  runSequence('styles-only-css', done);
});

gulp.task('build-js', function(done) {
  runSequence('scripts-only-js', 'js-pages', done);
});

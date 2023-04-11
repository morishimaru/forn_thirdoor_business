import gulp from 'gulp';
import cacheFile from 'gulp-cached';
import sassLint from 'gulp-sass-lint';
import base64 from 'gulp-base64';
import sass from 'gulp-sass';
import rename from 'gulp-rename';
import plumber from 'gulp-plumber';
import autoprefixer from 'gulp-autoprefixer';
import cleanCss from 'gulp-clean-css';



gulp.task('scss-lint', () =>
  gulp
    .src([
      path.dev.styles + '**/*.s+(a|c)ss',
      '!' + path.dev.styles + 'plugins/**/*.scss',
      '!' + path.dev.styles + 'global/video.scss'
    ])
    .pipe(cacheFile('scss-lint'))
    .pipe(sassLint())
    .pipe(sassLint.format())
    .pipe(sassLint.failOnError())
);

// combine scss file
gulp.task('styles',  gulp.series(['scss-lint'], () =>
  gulp
    .src([
      path.dev.styles + 'main.scss',
      path.dev.styles + 'fontface.scss',
      path.dev.styles + 'internal.scss'
    ])
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(base64({ extensions: ['svg'] }))
    //.pipe(rename('main.scss'))
    .pipe(
      rename(function(path) {
        // path.extname = '.scss';
        //console.log(path);
        path.basename === 'main' && (path.extname = '.scss');
        path.basename === 'internal' && (path.extname = '.scss');
        path.basename === 'fontface' && (path.basename += '.min');
      })
    )
    .pipe(gulp.dest(path.public.styles))
));
gulp.task('styles-only-css',  gulp.series(['scss-lint'], () =>
  gulp
    .src([
      path.dev.styles + 'main.scss',
      path.dev.styles + 'fontface.scss',
      path.dev.styles + 'internal.scss'
    ])
    .pipe(plumber({ errorHandler: onError }))
    .pipe(sass().on('error', sass.logError))
    .pipe(autoprefixer(AUTOPREFIXER_BROWSERS))
    .pipe(base64({ extensions: ['svg'] }))
    //.pipe(rename('main.min.css'))
    .pipe(
      rename(function(path) {
        path.basename += '.min';
        path.extname = '.css';
      })
    )
    .pipe(cleanCss())
    .pipe(gulp.dest(path.public.styles))
));

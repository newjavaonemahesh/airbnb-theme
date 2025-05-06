const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const rename = require('gulp-rename');

gulp.task('sass', function () {
  return gulp
    .src('./sass/style.scss') // Adjust if your SCSS lives elsewhere
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./')) // Outputs style.css
    .pipe(cleanCSS())
    .pipe(rename({ suffix: '.min' }))
    .pipe(gulp.dest('./')); // Outputs style.min.css
});

gulp.task('watch', function () {
  gulp.watch('./sass/**/*.scss', gulp.series('sass'));
});

// 👇 This allows you to run `gulp` without specifying a task
gulp.task('default', gulp.series('sass', 'watch'));
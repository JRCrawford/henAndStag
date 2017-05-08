var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');

gulp.task('css', function () {
    return gulp.src('web/css/sass/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(sourcemaps.write('/'))
        .pipe(gulp.dest('web/css'))
});

gulp.task('watcher', function () {
    gulp.watch('web/css/sass/*.scss', ['css']);
});

gulp.task('watch', ['css', 'watcher']);
gulp.task('default', ['css']);

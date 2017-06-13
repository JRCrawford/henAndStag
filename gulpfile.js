var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('css', function () {
    gulp.src('app/Resources/assets/sass/**/*.scss')
        .pipe(sass())
        .pipe(gulp.dest('web/generated-css'))
});

gulp.task('watcher', function () {
    gulp.watch('web/css/sass/*.scss', ['css']);
});

gulp.task('watch', ['css', 'watcher']);
gulp.task('default', ['css']);

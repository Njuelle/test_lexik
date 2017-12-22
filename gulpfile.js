var gulp    = require('gulp');
var plugins = require('gulp-load-plugins')();

var onError = function (err) {
    console.log(err);
};

gulp.task('css', function () {
    return gulp.src('./public/css/sass/main.sass')
        .pipe(plugins.plumber({
            errorHandler: onError
        }))
        .pipe(plugins.sass())
        .pipe(plugins.autoprefixer())
        .pipe(plugins.csso())
        .pipe(plugins.rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest('./public/css/'));
});


gulp.task('js', function() {
    return gulp.src('./public/js/src/**/*.js')
        .pipe(plugins.plumber({
            errorHandler: onError
        }))
        .pipe(plugins.concat('main.min.js'))
        .pipe(gulp.dest('./public/js'))
        .pipe(plugins.rename('main.min.js'))
        .pipe(plugins.uglify())
        .pipe(gulp.dest('./public/js'));
});

gulp.task('watch', function () {
    gulp.watch('./public/js/src/**/*.js', ['js']);
    gulp.watch('./public/css/sass/**/*.sass', ['css']);
});

gulp.task('build', ['css', 'js']);


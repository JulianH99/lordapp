const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel')
const image = require('gulp-imagemin')


/* compile sass */
gulp.task('sass', function() {
    gulp.src('./static/src/scss/styles.scss')
    .pipe(plumber())
    .pipe(sass({
        outputStyle: 'expanded'
    }))
    .pipe(autoprefixer({
        browsers: ['last 4 versions']
    }))
    .pipe(gulp.dest('./static/dist/css/'))
})


/* compile js */
gulp.task('js', function() {
    gulp.src('./static/src/js/*.js')
        .pipe(plumber())
        .pipe(babel({
            presets: [
                'env'
            ]
        }))
        .pipe(gulp.dest('./static/dist/js'))
})


/* minimize images */
gulp.task('images', function() {
    gulp.src('./static/src/img/**/*.*')
        .pipe(image({progressive: true}))
        .pipe(gulp.dest('./static/dist/img/'))
})

gulp.task('watch', function() {
    gulp.watch('./static/src/scss/**/*.scss', ['sass'])
    gulp.watch('./static/src/js/**/*.js', ['js'])
})


gulp.task('default', ['sass', 'images', 'js'])
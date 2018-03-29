const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');
const babel = require('gulp-babel')


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

gulp.task('js', function() {
    gulp.src('./static/src/js/main.js')
        .pipe(plumber())
        .pipe(babel({
            presets: [
                'env'
            ]
        }))
        .pipe(gulp.dest('./static/dist/js'))
})

gulp.task('default', function() {
    gulp.watch('./static/src/scss/**/*.scss', ['sass'])
    gulp.watch('./static/src/js/**/*.js', ['js'])
})
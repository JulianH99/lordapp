const gulp = require('gulp');
const sass = require('gulp-sass');
const plumber = require('gulp-plumber');
const autoprefixer = require('gulp-autoprefixer');


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


gulp.task('default', function() {
    gulp.watch('./static/src/scss/**/*.scss', ['sass']);
})
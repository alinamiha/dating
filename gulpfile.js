let gulp = require('gulp');
let sass = require('gulp-sass');
let sourcemaps = require('gulp-sourcemaps');
let watch = require('gulp-watch');

gulp.task('sass', function (done) {
    gulp.src('./src/sass/**/*.scss')
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))
	.pipe(sourcemaps.write('./'))
        .pipe(gulp.dest('./main/styles'))
    done()
})
gulp.task('sass:watch', function (){
    gulp.watch('./src/sass/**/*.scss', gulp.series('sass'))
})

let gulp = require('gulp');
let sass = require('gulp-sass');

gulp.task('sass', function (done) {
    gulp.src('./src/sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./main/styles'))
    done()
})
gulp.task('sass:watch', function (){
    gulp.watch('./src/sass/**/*.scss', gulp.series('sass'))
})

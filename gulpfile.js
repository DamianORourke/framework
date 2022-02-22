var gulp = require('gulp');
var sass = require('gulp-sass')(require('sass'));
var browserSync = require('browser-sync').create();

gulp.task('sass', function(){
    return gulp.src('app/assets/sass/newStyles.scss')
    .pipe(sass())
    .pipe(gulp.dest('app/css'))
    .pipe(browserSync.stream());
});

gulp.task('watch', gulp.series('sass', function(){

    browserSync.init({
        server: "./app/"
    });
    
    gulp.watch('app/assets/sass/newStyles.scss', gulp.series('sass'));
    gulp.watch('app/*.html').on('change', browserSync.reload);
    gulp.watch('app/js/*js').on('change', browserSync.reload);
}));


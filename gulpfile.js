var gulp = require('gulp');
var sass = require('gulp-sass');
var autoprefixer = require('gulp-autoprefixer');
 
var	input = 'resources/assets/sass/**/*.scss';
 
gulp.task('sass', function () {
  gulp.src(input)
    .pipe(sass().on('error', sass.logError))
	.pipe(autoprefixer({
	       browsers: ['last 2 versions'],
	       cascade: false
	}))
    .pipe(gulp.dest('public/css'));
});

gulp.task('sass:watch', function () {
  gulp.watch(input, ['sass']);
});

gulp.task('default', ['sass']);
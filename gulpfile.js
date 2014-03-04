var gulp = require('gulp');
var minifycss = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var rename = require("gulp-rename");
var stylesheetDir = 'css';

gulp.task('css', function() {
	return gulp.src(stylesheetDir + '/styles.css')
	.pipe(autoprefixer('last 10 version'))
	.pipe(minifycss())
	.pipe(rename('styles.min.css'))
	.pipe(gulp.dest('css'));
});

gulp.task('watch', function() {
	gulp.watch(stylesheetDir + '/*.css', ['css']);
});

gulp.task('default', ['css', 'watch']);
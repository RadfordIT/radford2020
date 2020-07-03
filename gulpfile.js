var gulp = require('gulp');
var postcss = require('gulp-postcss');
var sass = require('gulp-sass');
 
var autoprefixer = require('autoprefixer');
var cssnano = require('cssnano');
var sourcemaps = require('gulp-sourcemaps');
 
gulp.task('css', function () {
    var processors = [
        autoprefixer,
        cssnano
    ];
    return gulp.src('assets/sass/radford.scss')
	.pipe(sourcemaps.init())
	        //.pipe(sourcemaps.identityMap())
		      .pipe(sass().on('error', sass.logError))
        	.pipe(postcss(processors))
	.pipe(sourcemaps.write('.', {includeContent: false, sourceRoot: '../sass'}))
        .pipe(gulp.dest('assets/css'));
});

gulp.task('watch', function () {
  gulp.watch('assets/sass/*/*.scss', gulp.series('css'));
});

gulp.task('default', gulp.series('css', 'watch'));

var gulp = require('gulp'),
	uglify = require('gulp-uglify'),
	sass = require('gulp-ruby-sass'),
	livereload = require('gulp-livereload'),
	imagemin = require('gulp-imagemin'),
	prefix = require('gulp-autoprefixer'),
	jshint = require('gulp-jshint');

// error log function
function errorLog(error){
	console.error.bind(error);
	this.emit('end');
}

// Scripts tasks 
// Uglifies
gulp.task('scripts', function(){
	gulp.src('js/*.js')
		.pipe(jshint())
		.on('error', errorLog)
		.pipe(uglify())
		.on('error', errorLog)
		.pipe(gulp.dest('js/min'));
});

// Styles tasks 
// Sass compile
gulp.task('styles', function(){
	gulp.src('scss/**/*.scss')
		.pipe(sass({
			style: 'compressed'
		}))
		.on('error', errorLog)
		.pipe(prefix('last 2 versions'))
		.on('error', errorLog)
		.pipe(gulp.dest('css/'))
		.pipe(livereload());
});

// Image tasks 
// Compress
gulp.task('image', function(){
	//gulp.src('img/**/*')
	//	.pipe(imagemin())
	//	.pipe(gulp.dest('img/'));
});

// Watches files for changes and runs tasks
gulp.task('watch', function(){

	// start live reload server
	var server = livereload();

	// watch tasks
	gulp.watch('js/*.js', ['scripts']);
	gulp.watch('scss/**/*.scss', ['styles']);
	//gulp.watch('img/**/*', ['image']);
});

gulp.task('default', ['scripts', 'styles', 'image','watch']);
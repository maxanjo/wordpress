var gulp         = require('gulp'),
		sass         = require('gulp-sass'),
		autoprefixer = require('gulp-autoprefixer'),
		cleanCSS    = require('gulp-clean-css'),
		rename       = require('gulp-rename'),
		browserSync  = require('browser-sync').create(),
		concat       = require('gulp-concat'),
		uglify       = require('gulp-uglify'),
		uncss = require('gulp-uncss'),
		useref = require('gulp-useref'),
		gulpif = require('gulp-if'),
		uglify = require('gulp-uglify'),
		minifyCss = require('gulp-minify-css'),
		sftp = require('gulp-sftp');
		notify = require('gulp-notify');


// Browser-sync
gulp.task('browser-sync', ['styles'], function() {
		browserSync.init({
				proxy: 'project',
				notify: false
		});
});


// SFTP
gulp.task('sftp', function () {
    return gulp.src('./wordpress/wp-content/themes/project/*')
        .pipe(sftp({
            host: 'localhost',
            user: 'a0130638_darius',
            pass: '09081993',
            remotePath: '/home/a0130638/domains/webove.ru/public_html/test/'
        }));
});



// Styles
gulp.task('styles', function () {
	return gulp.src('./wordpress/wp-content/themes/project/sass/*.sass')
	.pipe(sass({
		includePaths: require('node-bourbon').includePaths
	}).on('error', sass.logError))
	.pipe(rename({suffix: '.min', prefix : ''}))
	.pipe(autoprefixer({browsers: ['last 15 versions'], cascade: false}))
	.pipe(cleanCSS())
	.pipe(gulp.dest('wordpress/wp-content/themes/project/css'))
	.pipe(browserSync.stream());
});


// Sprites JPG PNG
gulp.task('sprite', function () {
  var spriteData = gulp.src('./wordpress/wp-content/themes/project/img/icons/*.png').pipe(spritesmith({
    imgName: 'sprite.png',
    cssName: 'sprite.sass',
    padding: 10
  }));
  return spriteData.pipe(gulp.dest('./wordpress/wp-content/themes/project/css'));
});


// Watch
gulp.task('watch', function () {
	gulp.watch('./wordpress/wp-content/themes/project/sass/*.sass', ['styles']);
	gulp.watch('./wordpress/wp-content/themes/project/scripts/*.js').on("change", browserSync.reload);
	gulp.watch('./wordpress/wp-content/themes/project/*.html').on('change', browserSync.reload);
	gulp.watch('./wordpress/wp-content/themes/project/**/*.php').on('change', browserSync.reload);
});

gulp.task('watch', ['browser-sync', 'watch']);

// Builder
gulp.task('build', function () {
    return gulp.src('./wordpress/wp-content/themes/project/*.php')
        .pipe(useref())
        .pipe(gulpif('*.js', uglify()))
        .pipe(gulpif('*.css', minifyCss()))
        .pipe(useref())
        .pipe(gulp.dest('./wordpress/wp-content/themes/project/'));
})
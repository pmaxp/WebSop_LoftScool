var gulp = require("gulp"),
	browserSync = require('browser-sync'),
    sass = require('gulp-sass'),
    jade = require('gulp-jade');

var jadePath = './app/jade/_pages/*.jade',
    scssPath = './app/scss/main.scss';

gulp.task('jade', function() {
  var YOUR_LOCALS = {};
 
  gulp.src(jadePath)
    .pipe(jade({
      locals: YOUR_LOCALS,
      pretty: '\t',
    }))
    .pipe(gulp.dest('./app/'))
});

gulp.task('sass', function () {
  return gulp.src(scssPath)
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./app/css'));
});

gulp.task('compass', function() {
    gulp.src(scssPath)
        .pipe(plumber())
        .pipe(compass({
            config_file: './config.rb',
            css: 'css',
            sass: 'scss'
        }))
});

// Загружаем сервер
gulp.task('server', function() {
    browserSync({
    	port: 9000,
        server: {
            baseDir: "app"
        }
    });
});
// Слежка за файлами
gulp.task('watch', function() {
    gulp.watch([
        'app/*.html',
    	'app/js/**/*.js',
    	'app/css/**/*.css'	
    ]).on('change', browserSync.reload);
})

gulp.task('sass:watch', function () {
  gulp.watch(scssPath, ['sass']);
});

gulp.task('compass:watch', function () {
  gulp.watch(scssPath, ['compass']);
});

gulp.task('jade:watch', function () {
  gulp.watch(jadePath, ['jade']);
});

gulp.task('default',['server', 'watch', 'sass:watch', 'jade:watch']);

// ==========================================
// =============== Функции ==================


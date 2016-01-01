var gulp = require("gulp"),
    browserSync = require('browser-sync'),
    sass = require('gulp-sass'),
    jade = require('gulp-jade'),
    plumber = require('gulp-plumber'),
    sourcemaps = require('gulp-sourcemaps');

//-----------VarsPath------------//
var jadePath = './app/jade/_pages/*.jade',
    scssPath = './app/scss/main.scss',
    jadePathAll = './app/jade/**/*.jade',
    scssPathall = './app/scss/**/*.scss';

//-----------On Jade------------//
gulp.task('jade', function() {
    var YOUR_LOCALS = {};
 
    gulp.src(jadePath)
        .pipe(plumber())
        .pipe(jade({
            locals: YOUR_LOCALS,
            pretty: '\t',           
        }))
        .pipe(gulp.dest('./app/'))
});
//-----------On Scss------------//
gulp.task('sass', function() {
    return gulp.src(scssPath)
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass().on('error', sass.logError))
        .pipe(sourcemaps.write('./'))
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

//-----------Load Server------------//
gulp.task('server', function() {
    browserSync({
    	port: 9000,
        server: {
            baseDir: "app"
        }
    });
});
//-----------watch files------------//
gulp.task('watch', function() {
    gulp.watch([
        'app/*.html',
    	'app/js/**/*.js',
    	'app/css/**/*.css'	
    ]).on('change', browserSync.reload);
})

gulp.task('sass:watch', function() {
    gulp.watch(scssPathall, ['sass']);
});

gulp.task('compass:watch', function() {
    gulp.watch(scssPath, ['compass']);
});

gulp.task('jade:watch', function() {
    gulp.watch(jadePathAll, ['jade']);
});

gulp.task('default',['server', 'watch', 'sass:watch', 'jade:watch']);
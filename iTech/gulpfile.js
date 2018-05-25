var gulp = require('gulp')
    , sass = require('gulp-sass')
    , clean = require('gulp-clean')
    , autoprefixer = require('gulp-autoprefixer')
    , postcss = require('gulp-postcss')
    , imagemin = require('gulp-imagemin')
    , cssnano= require('gulp-cssnano')
    , uglify = require('gulp-uglify')
    , concat = require('gulp-concat')
    , browserSync = require('browser-sync')

    gulp.task('clean', function(){
        return gulp.src('dist')
            .pipe(clean());
    })

gulp.task('copy', ['clean'], function () {
    gulp.src([
        'src/components/**/*',
        'src/css/**/*',
        'src/*.php',
    ], { "base": "src" })//o base mantem a estrutura
        .pipe(gulp.dest('dist'))
})


gulp.task('sass', function(){
    return gulp.src('./src/sass/**/*.scss')
        .pipe(sass())
        .pipe(autoprefixer())
        .pipe(cssnano())
        .pipe(gulp.dest('./dist/css/'));
})




gulp.task('uncss', function () {
    return gulp.src('./dist/components/**/*.css')
        .pipe(postcss())
        .pipe(gulp.dest('./dist/components/'));
});


gulp.task('imagemin', function(){
    return gulp.src('./src/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/img/'))
});

gulp.task('build-js', function(){
    gulp.src('src/javascript/**/*')
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/javascript/'))
})

gulp.task('serve', ['copy', 'imagemin'], function () {
    browserSync.init({
        server: {
            baseDir: 'dist'
        }
});

    gulp.watch('./dist/**/*').on('change', browserSync.reload)
    gulp.watch('./src/sass/**/*.scss', ['sass'])
  
})
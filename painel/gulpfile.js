var gulp = require('gulp')
    , include = require('gulp-file-include')
    , clean = require('gulp-clean')
    , autoprefixer = require('gulp-autoprefixer')
    , uncss = require('postcss-uncss')
    , imagemin = require('gulp-imagemin')
    , cssnano= require('gulp-cssnano')
    , uglify = require('gulp-uglify')
    , concat = require('gulp-concat')
    , rename = require('gulp-rename')
    , browserSync = require('browser-sync')
     , htmlmin = require('gulp-htmlmin');

    gulp.task('clean', function(){
        return gulp.src('dist')
            .pipe(clean());
    })

   


//o que ira copiar
gulp.task('copy', ['clean'], function () {
    gulp.src([
        'src/componentes/**/*',
        'src/css/**/*',
        'src/img/**/*',
    ], { "base": "src" })//o base mantem a estrutura
        .pipe(gulp.dest('dist'))
})



gulp.task('build-js', function(){
    gulp.src('src/js/**/*')
    .pipe(concat('app.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('./dist/js/'))
})


// gulp.task('html', function(){
//     return gulp.src([
//             ',
//         ])
//         .pipe(include())
//         .pipe(gulp.dest('./dist/'))
// })


gulp.task('minify', function() {
    return gulp.src('./src/**/*.html')
      .pipe(htmlmin({collapseWhitespace: true}))
      .pipe(gulp.dest('dist'));
  });

//reduz o tamanho da imagem
gulp.task('imagemin', function(){
    return gulp.src('./src/img/**/*')
        .pipe(imagemin())
        .pipe(gulp.dest('./dist/img/'))
});


gulp.task('default', ['copy' ,], function(){
    gulp.start('minify', 'imagemin', 'build-js')
})


gulp.task('serve',['minify'], function () {
    browserSync.init({
        server: {
            baseDir: 'dist'
        }
});

    gulp.watch('./dist/**/*').on('change', browserSync.reload)

    //monitora alteração caso sera alteradao reload o browser
     gulp.watch('./src/**/*.html', ['html'])
    gulp.watch('.src/javascript/**/*', ['build-js'])
})



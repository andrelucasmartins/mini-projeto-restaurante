var gulp = require('gulp'),
    sass = require("gulp-sass"),
    browserSync = require("browser-sync").create();

var reload = browserSync.reload;

gulp.task("server", function(){
    browserSync.init({
        server: "./",
        startPath: "/", // After it browser running
        browser: 'firefox',
        host: 'localhost',
        port: 4000,
        open: true,
        tunnel: true
    });

});

gulp.task("sass", function(){
    return gulp.src("./sass/**/*scss")
            .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
            .pipe(gulp.dest("./dist/css"))
            .pipe(browserSync.stream());
});

gulp.task("default", ["server"], function(){
    gulp.watch("./sass/**/*.scss", ['sass']);
    gulp.watch("*.html").on("change", reload);
});
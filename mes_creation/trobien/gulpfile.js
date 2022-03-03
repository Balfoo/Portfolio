var gulp = require("gulp");
var sass = require("gulp-sass");
var sourcemaps = require("gulp-sourcemaps");
var gulp = require('gulp'),
    watch = require('gulp-watch');

gulp.task("sass", function(done) {
  return gulp
    .src("./assets/scss/*.scss")
    .pipe(sourcemaps.init())
    // pre processeur
    .pipe(sass())
    // post processeur --> Arrange notre code (ajoute des prefix...)
    .pipe(sourcemaps.write("."))
    .on("error", sass.logError)
    .pipe(gulp.dest("./assets/css"));
});

/* la tache watch, se lance avec gulp watch, et surveille la modification de certains fichiers*/
gulp.task("watch", function() {
  gulp.watch(["./assets/scss/**/*.scss"], gulp.series("sass"));
});

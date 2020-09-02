'use strict'

const gulp = require('gulp');
const sass = require('gulp-sass');

function compileSass(done) {
    gulp.src('sass/**/*.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('css'));
    done();
}

function watchSass() {
    gulp.watch('sass/**/*.scss', compileSass);
}

exports.watchSass = watchSass

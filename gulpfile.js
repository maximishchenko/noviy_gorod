const {src, dest, watch}= require('gulp');
const less = require('gulp-less');
const sourcemaps = require('gulp-sourcemaps');

function less_compile (){
    return src('./less/style.less')
        .pipe(less())
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write('./'))
        .pipe(dest('./css/'))
}

exports.default = function () {
  watch('./less/**/*.less', less_compile)
}

exports.less = less_compile;
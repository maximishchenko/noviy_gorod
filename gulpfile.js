const {src, dest, watch}= require('gulp');
const less = require('gulp-less');
const sourcemaps = require('gulp-sourcemaps');

function less_compile (){
    return src('./frontend/web/less/style.less')
        .pipe(less())
        .pipe(sourcemaps.init())
        .pipe(sourcemaps.write('./'))
        .pipe(dest('./frontend/web/css/'))
}

exports.default = function () {
  watch('./frontend/web/less/*.less', less_compile)
}

exports.less = less_compile;
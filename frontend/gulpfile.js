var gulp = require('gulp');

function build() {
  return gulp.src(['build/**/*', '!build/assets/**/*']).pipe(gulp.dest('C:/Server/htdocs/api/web'));
}
function assets() {
  return null;//gulp.src(['build/assets/**/*']).pipe(gulp.dest('C:/Server/htdocs/api/web/assets'));
}

exports.default = gulp.watch(['build/**/*', '!build/assets/**/*'], build);
exports.build = gulp.series(gulp.parallel(build, assets));

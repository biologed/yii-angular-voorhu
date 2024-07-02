const gulp = require('gulp');

function build() {
  return gulp.src(['build/**/*', '!build/assets/**/*']).pipe(gulp.dest('C:/Server/htdocs/api/web'));
}
function assets() {
  return gulp.src(['build/assets/i18n/*']).pipe(gulp.dest('C:/Server/htdocs/api/web/assets/i18n'));
}

// exports.default = gulp.watch(['build/**/*', '!build/assets/**/*'], build);
exports.build = gulp.series(gulp.parallel(build, assets));

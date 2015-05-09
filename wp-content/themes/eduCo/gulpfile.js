var gulp = require('gulp'),
	connect = require('gulp-connect'),
	less = require('gulp-less'),
  LessPluginCleanCSS = require('less-plugin-clean-css'),
  LessPluginAutoPrefix = require('less-plugin-autoprefix'),
  cleancss = new LessPluginCleanCSS({ advanced: true }),
  autoprefix = new LessPluginAutoPrefix({ browsers: ["last 5 versions"] });


gulp.task('connect', function() {
  connect.server({
    root: [__dirname],
    port: 4000,
    livereload: true
  });
});

gulp.task('html', function () {
  gulp.src('*.html')
    .pipe(connect.reload());
});
 
gulp.task('less', function() {
  gulp.src('less/*.less')
    .pipe(less({
      plugins: [autoprefix, cleancss]
    }))
    .pipe(gulp.dest('css'))
    .pipe(connect.reload());
});
 
gulp.task('watch', function() {
	gulp.watch(['*.html'], ['html']);
    gulp.watch('less/*.less', ['less']);
})
 
gulp.task('default', ['connect', 'html', 'less', 'watch']);
var gulp = require("gulp"),
	browserSync = require('browser-sync');

gulp.task('server', function () {
	browserSync({
		proxy: "dz1/app",
		//port: 9000,
		//server: {
		//	baseDir: 'app'
		//}
	});
});

gulp.task('watch', function () {
	gulp.watch([
		'app/*.html',
		'app/*.php',
		'app/js/*.js',
		'app/css/*.css'
	]).on('change', browserSync.reload);
});

gulp.task('default', ['server', 'watch']);
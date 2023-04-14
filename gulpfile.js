var gulp = require('gulp'),
tinypng = require('gulp-tinypng-compress');

exports.default = function (done) {
	console.log("Hello from default gulp task.");
	done();
};

exports.tinypng = function (done) {
	gulp.src('_images/**/*.{png,jpg,jpeg}')
		.pipe(tinypng({
			key: 'H2s2xWF3XtW2p24yv8VhvMc78Y6s7Xht',
			sigFile: '.tinypng-sigs',
			sameDest: true,
			summarize: true,
			log: true,
		}))
		.pipe(gulp.dest('_images'));
	done();
};
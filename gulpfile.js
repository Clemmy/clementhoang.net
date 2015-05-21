var gulp = require('gulp');
var uglify = require('gulp-uglify');
var concat = require('gulp-concat');
    
gulp.task('scripts', function() {
    return gulp.src('js/*.js')
        .pipe(concat('all.js'))
        .pipe(uglify())
        .pipe(gulp.dest('dist'));
});

gulp.task('default', ['scripts']);

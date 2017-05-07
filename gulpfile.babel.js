import gulp from 'gulp'
import sequence from 'gulp-sequence'

import del from 'del'
import imagemin from 'gulp-imagemin'
import gulpLoadPlugins from 'gulp-load-plugins'


const plugins = gulpLoadPlugins()


// ----------------------------------------------------------------------------
// Helpers
// ----------------------------------------------------------------------------

gulp.task('build:images', (done) => {
  return gulp.src('src/**/*.*')
    .pipe(imagemin())
    .on('error', (error) => {
      done(error)
    })
    .pipe(gulp.dest('dist'))
    .pipe(plugins.size())
})


gulp.task('build:static', () => {
  return gulp.src('src/**/*.*')
    .pipe(gulp.dest('dist'))
    .pipe(plugins.size())
})


gulp.task('default', () => {
  gulp.start('build')
})


gulp.task('clean', () => {
  return del(['./dist/*'])
})


// ----------------------------------------------------------------------------
// Tasks
// ----------------------------------------------------------------------------

// Build
gulp.task('build', sequence('clean', 'build:static', 'build:images'))

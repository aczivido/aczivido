import del from 'del'

import express from 'express'

import gulp from 'gulp'
import sequence from 'gulp-sequence'
import imagemin from 'gulp-imagemin'
import gulpLoadPlugins from 'gulp-load-plugins'


const plugins = gulpLoadPlugins()
const serverPort = 5000
const server = express()


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

// Serve
gulp.task('serve', () => {
  server.use(express.static('./src'))
  server.listen(serverPort)

  console.log(`Serving on localhost:${serverPort}`)  // eslint-disable-line no-console
})


gulp.task('serve:prod', ['build'], () => {
  server.use(express.static('./dist'))
  server.listen(serverPort)

  console.log(`Serving on localhost:${serverPort}`)  // eslint-disable-line no-console
})


// Build
gulp.task('build', sequence('clean', 'build:static', 'build:images'))

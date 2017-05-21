import del from 'del'

import express from 'express'

import gulp from 'gulp'
import sequence from 'gulp-sequence'
import imagemin from 'gulp-imagemin'
import htmlmin from 'gulp-htmlmin'
import rsync from 'gulp-rsync'
import gulpLoadPlugins from 'gulp-load-plugins'


const plugins = gulpLoadPlugins()
const serverPort = 5000
const server = express()


// ----------------------------------------------------------------------------
// Helpers
// ----------------------------------------------------------------------------

gulp.task('minimise:images', (done) => {
  return gulp.src('src/**/*.*')
    .pipe(imagemin())
    .on('error', (error) => done(error))
    .pipe(gulp.dest('dist'))
    .pipe(plugins.size())
})


gulp.task('minimise:html', (done) => {
  return gulp.src('src/**/*.html')
    .pipe(htmlmin({
      collapseWhitespace: true,
      collapseBooleanAttributes: true,
      decodeEntities: true,
      minifyCSS: true,
      minifyJS: true
    }))
    .on('error', (error) => done(error))
    .pipe(gulp.dest('dist'))
    .pipe(plugins.size())
})


gulp.task('build:all', () => {
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
gulp.task('build', sequence('clean', 'build:all', ['minimise:images', 'minimise:html']))


// Build
gulp.task('deploy', () => {
  const defaultOptions = {
    compress: true,
    root: 'dist/',
    clean: true,
    recursive: true
  }
  const userOptions = require('./deploy.json')
  const options = Object.assign({}, defaultOptions, userOptions)

  return gulp.src('dist/')
    .pipe(rsync(options))
    .pipe(plugins.size())
})

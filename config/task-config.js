const browserSync    = require('browser-sync')
const data           = require('gulp-data')
const gulp           = require('gulp')
const handleErrors   = require('../node_modules/blendid/gulpfile.js/lib/handleErrors')
const htmlmin        = require('gulp-htmlmin')
const path           = require('path')
const nunjucksRender = require('gulp-nunjucks-render')
const fs = require('fs')

module.exports = {
  html        : true,
  images      : true,
  fonts       : true,
  static      : true,
  svgSprite   : true,
  ghPages     : true,
  stylesheets : true,

  additionalTasks: {
    initialize(gulp, PATH_CONFIG, TASK_CONFIG) {
      gulp.task('php', function () {
        const exclude = '!' + path.resolve(process.env.PWD, PATH_CONFIG.src, PATH_CONFIG.html.src, '**/{' + TASK_CONFIG.html.excludeFolders.join(',') + '}/**');

        const paths = {
          src: [path.resolve(process.env.PWD, PATH_CONFIG.src, PATH_CONFIG.html.src, '**/*.php'), exclude],
          dest: path.resolve(process.env.PWD, PATH_CONFIG.dest, PATH_CONFIG.html.dest),
        }

        const dataFunction = TASK_CONFIG.html.dataFunction || function(file) {
          const dataPath = path.resolve(process.env.PWD, PATH_CONFIG.src, PATH_CONFIG.html.src, TASK_CONFIG.html.dataFile)
          return JSON.parse(fs.readFileSync(dataPath, 'utf8'))
        }

        const nunjucksRenderPath = [ path.resolve(process.env.PWD, PATH_CONFIG.src, PATH_CONFIG.html.src) ]
        TASK_CONFIG.html.nunjucksRender.path = TASK_CONFIG.html.nunjucksRender.path || nunjucksRenderPath

        return gulp.src(paths.src)
          .pipe(data(dataFunction))
          .on('error', handleErrors)
          .pipe(nunjucksRender(Object.assign({ inheritExtension: true }, TASK_CONFIG.html.nunjucksRender)))
          .on('error', handleErrors)
          .pipe(gulp.dest(paths.dest))
          .pipe(browserSync.stream())
      });
    },
    development: {
      prebuild: ['php'],
      postbuild: null
    },
    production: {
      prebuild: ['php'],
      postbuild: null
    }
  },
  javascripts: {
    entry: {
      // files paths are relative to
      // javascripts.dest in path-config.json
      app: ["./app.js"]
    }
  },

  browserSync: {
    proxy: 'localhost:3001',
    ui: {
      port: 3002
    }
  },

  production: {
    rev: false
  }
}

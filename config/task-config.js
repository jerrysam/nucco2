module.exports = {
  html        : true,
  images      : true,
  fonts       : true,
  static      : true,
  svgSprite   : true,
  ghPages     : true,
  stylesheets : true,

  html: {
    extensions: ['html', 'php'],
    nunjucksRender: { inheritExtension: true }
  },

  javascripts: {
    entry: {
      // files paths are relative to
      // javascripts.dest in path-config.json
      app: ["./app.js"]
    }
  },

  browserSync: {
    files: ['html', 'php'],
    proxy: 'localhost:8888'
  },

  production: {
    rev: true
  }
}

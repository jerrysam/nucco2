module.exports = {
  images      : true,
  fonts       : true,
  static      : true,
  svgSprite   : true,
  ghPages     : true,
  stylesheets : true,

  html: {
    extensions: ['html','php'],
    htmlmin: {
      ignoreCustomFragments: [/<\?php.*?\?>/]
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
    proxy: {
      target: 'localhost:3001',
      ws: true
    }
  },

  production: {
    rev: true
  }
}

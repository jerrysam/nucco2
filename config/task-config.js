module.exports = {
  images      : true,
  fonts       : true,
  static      : true,
  svgSprite   : true,
  ghPages     : true,
  stylesheets : true,

  html : {
    extensions: ['html', 'php'],
    htmlmin: {
      //ignoreCustomFragments: [/<\?php.*?\?>/]
    },
    nunchucksRender: {
      inheritExtension: true
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
    rev: true
  }
}

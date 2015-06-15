
module.exports = function(grunt) {


require('load-grunt-tasks')(grunt);
require('time-grunt')(grunt);

grunt.initConfig({
  pkg: grunt.file.readJSON('package.json'),
  app: 'app',
  dist: 'dist',

uglify: {
    my_target: {
      files: {
        'app/js/app.js': ['app/bower_components/jquery/dist/jquery.min.js',
       'app/bower_components/foundation/js/foundation.min.js',
       'app/bower_components/modernizr/modernizr.js'],
      }
    }
  },

  php: {
    dist: {
      options: {
        hostname: '127.0.0.1',
        port: 9000,
        base: 'app', // Project root 
        keepalive: false,
        open: false
      }
    }
  },

  jade: {
    compile: {
      options: {
        client: false,
        pretty: true
      },
      files: [ {
        cwd: "app/jade/",
        src: "**/*.jade",
        dest: "app",
        expand: true,
        ext: ".php"
      } ]
    }
  },

  sass: {
    options: {
      sourceMap: true,
      trace: true,
      check: true,
      debugInfo: true,
      noCache: false,
      update: true,
      sourceComments: true,
      quiet: false, // true убирает пищалку
      includePaths: [
        'app/bower_components/foundation/scss',
        'app/bower_components/compass-mixins/lib'
      ]
    },
    dist: {
      options: {
        outputStyle: 'extended'
      },
      files: {
        'app/css/app.css': 'app/scss/app.scss',
        'app/css/foundation.css': 'app/scss/foundation.scss'
      }
    }
  },

/*  webfont: { //https://github.com/sapegin/grunt-webfont
    icons: {
      src: 'app/img/icons/*.svg',
      dest: 'app/fonts',
      destCss: 'app/scss/base',
      options: {
        engine: 'node',
        types: 'eot,woff,ttf,svg',
        stylesheet: 'scss'
      }
    }
  },*/

  sprite:{
    all: {
      src: 'app/img/sprite/*',
      dest: 'app/img/sprite.png',
      destCss: 'app/scss/base/_sprite.scss',
      cssFormat: 'css',
      padding: 30,
      algorithm: 'alt-diagonal',
      cssVarMap: function (sprite) {
        sprite.name = 'sprite_' + sprite.name;
      }
    }
  },

  browserSync: {
    dist: {
      bsFiles: {
        src: [
          'app/*.php',
          'app/css/app.css',
          'app/js/*.js',
          'app/fonts/*'
        ]
      },
      options: {
        proxy: '<%= php.dist.options.hostname %>:<%= php.dist.options.port %>',
        watchTask: true,
        notify: true,
        open: true,
        logLevel: 'silent',
        ghostMode: {
          clicks: true,
          scroll: true,
          links: true,
          forms: true
        }
      }
    }
  },

    watch: {
      sass: {
        files: ['app/scss/base/*.scss',
                'app/scss/layout/*.scss',
                'app/scss/module/*.scss',
                'app/scss/state/*.scss',
                'app/scss/theme/*.scss',
                'app/scss/*.scss'
                ],
        tasks: ['sass']
      },
      jade: {
        files: ['app/jade/*.jade',
                'app/jade/parts/*.jade'
                ],
        tasks: ['jade']
      },
      sprite: {
        files: 'app/img/sprite/*.png',
        tasks: ['sprite', 'sass']
      },
/*      icons: {
        files: 'app/img/icon/*.svg',
        tasks: ['webfont', 'sass']
      }*/
    }
});


grunt.registerTask('serve', [
    //'webfont',
    'sprite',
    'sass',
    'jade',
    'php:dist',         // Start PHP Server 
    'browserSync:dist', // Using the php instance as a proxy 
    'watch'             // Any other watch tasks you want to run 
]);

grunt.registerTask('default', [ // если нужно что-то перекомпилить, просто набери grunt.
    'shell:bower',
    //'webfont',
    'sprite',
    'sass'
]);

};


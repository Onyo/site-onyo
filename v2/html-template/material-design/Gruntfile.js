module.exports = function(grunt) {

  // Project configuration.
  grunt.initConfig({
    pkg: grunt.file.readJSON('package.json'),

    app: {
      public: 'public'
    },

    sass: {
      dev: {
        files: {
          'public/css/main.css': 'public/css/sass/main.scss'
        }
      }
    },

    watch: {
      sass: {
        files: ['public/css/sass/*.scss'],
        tasks: ['sass']
      },
      files: ['public/**'],
      tasks: 'copy'
    },

    express: {
      all: {
        options: {
          port: 3000,
          hostname: 'localhost',
          bases: [
            './dist'
          ],
          livereload: true
        }
      }
    },

    bower: {
      install: {
        options: {
          targetDir: '<%=app.public%>/lib',
          verbose: true
        }
      }
    },

    copy: {
      main: {
        files: [
          // includes files within path
          {expand: true, cwd: '<%=app.public%>/css', src: ['*.css'], dest: 'dist/css'},
          {expand: true, cwd: '<%=app.public%>/css/assets', src: ['**'], dest: 'dist/css/assets'},
          {expand: true, cwd: '<%=app.public%>/images', src: ['**'], dest: 'dist/images'},
          {expand: true, cwd: '<%=app.public%>/lib', src: ['**'], dest: 'dist/lib'},
          {expand: true, cwd: '<%=app.public%>/', src: ['*.html'], dest: 'dist/'}
        ],
      },
    }

  });

  grunt.loadNpmTasks('grunt-contrib-copy');

  grunt.loadNpmTasks('grunt-contrib-sass');

  grunt.loadNpmTasks('grunt-express');
  grunt.loadNpmTasks('grunt-contrib-watch');

  grunt.loadNpmTasks('grunt-bower-task');

  grunt.registerTask('bower-to-public', [
    'bower:install'
  ]);

  grunt.registerTask('start-server', [
    'express',
    'watch'
  ]);
};
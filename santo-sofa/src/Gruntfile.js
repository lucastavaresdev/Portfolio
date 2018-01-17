module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    sass: {
      development: {
        files: {
          "../assets/css/style.css": "scss/style.scss", // Caminho dos arquivos
        }
      }
    },
    watch: {
      styles: {
        files: ['**/*.scss'], // Quais arquivos o grunt ficará de olho
        tasks: ['sass']
      }
    }
  });

  grunt.registerTask('default', ['sass', 'watch']);
};
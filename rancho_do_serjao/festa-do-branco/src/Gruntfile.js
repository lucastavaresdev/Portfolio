module.exports = function(grunt) {
  require('jit-grunt')(grunt);

  grunt.initConfig({
    sass: {
      development: {
        files: {
          "../assets/css/hallowen.css": "scss/style.scss", // Caminho dos arquivos
          "../assets/css/heaven-hell.css": "scss/heaven-hell.scss", // Caminho dos arquivos
          "../assets/css/camila-haniel.css": "scss/festa-do-branco.scss" // Caminho dos arquivos
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
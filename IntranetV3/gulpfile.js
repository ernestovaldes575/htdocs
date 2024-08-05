//?Importacion de las librerias de bootstrap y Gulp-Sass
const{src,dest,watch,series} = require('gulp');
const sass = require('gulp-postcss')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

function css(done){
    src('src/scss/style.scss')
        .pipe(sass())
        .pipe(postcss([autoprefixer]))
        .pipe(dest('css/Estilos'))
    done()
}
function dev(){
    watch('src/scss/**/*.scss',css);
}
exports.css = css;
exports.default = series(css,dev);
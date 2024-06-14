//Importamos Librerias con las que vamos a trabajar
const {src,dest,watch,series} = require('gulp');
//SASS
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

function css(done){
    src('src/scss/app.scss')
        .pipe(sass({outputStyle:'expanded'}))// {outputStyle:'expanded'}Compilamos SASS
        .pipe(postcss([autoprefixer()]))
        .pipe(dest('build/css'))//Generamos los archivos
    done()
}
function dev(){
    watch('src/scss/**/*.scss',css);
}
exports.css = css;
exports.default = series(css, dev);
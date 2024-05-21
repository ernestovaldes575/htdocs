//Importamos los datos de la liberias que vamos ocupando
const {src,dest,watch,series} = require('gulp');
//Exportamos SASS
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

function css(done){
    src('src/scss/app.scss')
        .pipe(sass())//Compilamos SASS
        .pipe(postcss([autoprefixer()]))
        .pipe(dest('build/css'))//Generamos los archivos
    done()
}
//Funcion para que escuche cada que hacemos un modificacion en el codigo
function dev(){
    watch('src/scss/**/*.scss',css)
}

exports.css = css;

exports.default = series(css, dev);
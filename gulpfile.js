//Importamos los datos de las liberias que vamos ocupando
const {src,dest,watch,series} = require('gulp');
//Exportamos SASS
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

//Imagenes
const webp = require('gulp-webp');


function css(done){
    src('src/scss/app.scss')
        .pipe(sass({outputStyle:'expanded'}))// {outputStyle:'expanded'}Compilamos SASS
        .pipe(postcss([autoprefixer()]))
        .pipe(dest('PaginaWeb/css/Estilos'))//Generamos los archivos
    done()
}
function versionWebp(done){
    src('src/img/**/*.{png,jpg}')
        .pipe(webp())
        .pipe(dest('PaginaWeb/img'))
    done()
}
//Funcion para que escuche cada que hacemos un modificacion en el codigo
function dev(){
    watch('src/scss/**/*.scss',css);
}

exports.css = css;
exports.versionWebp = versionWebp;
exports.default = series(css, dev, versionWebp);
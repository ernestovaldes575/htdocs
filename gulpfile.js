//Importamos los datos de las liberias que vamos ocupando
const {src,dest,watch,series} = require('gulp');
//Exportamos SASS
const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

function css(done){
    src('src/scss/app.scss')
        .pipe(sass({outputStyle:'expanded'}))// {outputStyle:'expanded'}Compilamos SASS
        .pipe(postcss([autoprefixer()]))
        .pipe(dest('PaginaWeb/CSS/css'))//Generamos los archivos
    done()
}

// function bootstrap(done){
//     src('sass/scss/style.scss')
//         .pipe(sass({outputStyle:'expanded'}))
//         .pipe(postcss([autoprefixer()]))
//         .pipe(dest('dest/css'))
//     done()
// }
//Funcion para que escuche cada que hacemos un modificacion en el codigo
function dev(){
    watch('src/scss/**/*.scss',css);
    // watch('sass/scss/**/*.scss',bootstrap);
}

exports.css = css;
//exports.bootstrap = bootstrap;

exports.default = series(css, dev);
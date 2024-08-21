const {src,dest,watch,series} = require('gulp');

const sass = require('gulp-sass')(require('sass'));
const postcss = require('gulp-postcss');
const autoprefixer = require('autoprefixer');

function css(done){
    src('src/scss/style.scss')
        .pipe(sass())
        .pipe(postcss([autoprefixer()]))
        .pipe(dest('build/css'))
    done()
}
function dev(){
    watch('src/scss/**/*.scss',css);
}

exports.css = css;
exports.default = series(css,dev);
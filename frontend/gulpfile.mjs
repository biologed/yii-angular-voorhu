import { src, dest, series, parallel } from 'gulp';
import fs from "fs";
import template from 'gulp-template';

export function angular() {
  return src(['build/**/*', '!build/assets/**/*'])
    .pipe(dest('C:/Server/htdocs/api/web'));
}
export function assets() {
  return src(['build/assets/i18n/*'])
    .pipe(dest('C:/Server/htdocs/api/web/assets/i18n'));
}
export function modifyAppAsset() {
  const arrayList = getAssetFilesList();
  return src('C:/Server/htdocs/api/assets/template/AppAsset.php')
    .pipe(template({
      css: arrayList.css,
      js1: arrayList.js1,
      js2: arrayList.js2,
      js3: arrayList.js3,
    }, {
      envOptions: false
    }))
    .pipe(dest('C:/Server/htdocs/api/assets'))
}

function getAssetFilesList() {
  //3 regexp из-за того что gulp-template экранирует спец символы
  const regexJs1 = new RegExp('main.{17}.js');
  const regexJs2 = new RegExp('polyfills.{17}.js');
  const regexJs3 = new RegExp('runtime.{17}.js');
  const regexCss = new RegExp('styles.{17}.css');
  const arrayList = {
    'js1': '',
    'js2': '',
    'js3': '',
    'css': '',
  };
  fs.readdirSync("build/").forEach(file => {
    //Находим main, polyfills, runtime
    if (regexJs1.test(file)) {
      arrayList.js1 = file
    }
    if (regexJs2.test(file)) {
      arrayList.js2 = file
    }
    if (regexJs3.test(file)) {
      arrayList.js3 = file
    }
    //Находим styles
    if (regexCss.test(file)) {
      arrayList.css = file
    }
  });
  return arrayList;
}

const build = series(parallel(angular, assets, modifyAppAsset));
export default build;

# mini-projeto-restaurante

Description:
Neste mini projeto venho mostrar uma simples automação do seu workflow.

## Dependencias do desenvolvedor

.1 gulp
.2 gulp-sass
.3 browser-sync

## Instalando dependencias de Dev

```
npm install --save-dev gulp gulp-sass browser-sync
```
# Criando seu arquivo gulpfile.js

## Inicializando:

```
var gulp = require('gulp'),
    sass = require("gulp-sass"),
    browserSync = require("browser-sync").create();

var reload = browserSync.reload;

```
Se você já procurou outra solução para resolver o problema com [browser-sync] funcionar no windows 10, aqui está um exemplo de como você resolver isso. Depois de muita pesquisa achei está forma para resolver. Pois o meu browser-sync não estava inicializando pela porta padrão 3000. Agora ao rordar o seu arquivo [gulpfile] através do [npm gulp]. Você também pode escolher em qual browser você quer abrir sua página Ex: localhost:4000. Segue o exemplo abaixo:

## Criando suas Tasks 

```
gulp.task("server", function(){
    browserSync.init({
        server: "./",
        startPath: "/", // After it browser running
        browser: 'firefox',
        host: 'localhost',
        port: 4000,
        open: true,
        tunnel: true
    });

});

gulp.task("sass", function(){
    return gulp.src("./sass/**/*scss")
            .pipe(sass({outputStyle: 'expanded'}).on('error', sass.logError))
            .pipe(gulp.dest("./dist/css"))
            .pipe(browserSync.stream());
});

gulp.task("default", ["server"], function(){
    gulp.watch("./sass/**/*.scss", ['sass']);
    gulp.watch("*.html").on("change", reload);
});
```
Nunca se esqueça de criar a task default, pois é através dela que vai chamar todas suas tasks ou tarefas. Existe outras maneiras de que você pode criar suas tasks, por isso é importante você consultar a documentação do gulp e as especificações de cada plugin.

Conforme for evoluindo este mini projeto vou adicionar mais comentarios. Então até ;)
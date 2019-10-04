/**
 * Imports
 */

// Packages
import gulp            from "gulp";
import gulpLoadPlugins from "gulp-load-plugins";
import browserSync     from "browser-sync";
import babelify        from "babelify";
import browserify      from "browserify";
import source          from "vinyl-source-stream";
import buffer          from "vinyl-buffer";
import vueify          from "vueify";
import watchify        from "watchify";

// Loader
const $ = gulpLoadPlugins();

// Session
browserSync.create();

/**
 * Definition
 */

// Messages
const message = {
  compiled   : "<%= file.relative %>: file compiled",
  transpiled : "<%= file.relative %>: file transpiled",
  updated    : "<%= file.relative %>: file updated",
  minified   : "<%= file.relative %>: file minified",
  cleaned    : "<%= file.relative %>: file cleaned",
  error      : "<%= error.message %>"
};

/**
 * Configuration
 */

// Path
/* if using MAMP */
const server  = 'htdocs'
const root    = 'public'
const folders = process.cwd().split('/')

let local = ''
let index = 0

for (const folder of folders) {
  if (folder == server) {
    index = folders.indexOf(server)
    for (let i = index + 1 ; i < folders.length ; i++) {
      local += `${folders[i]}/`
      if (folders[i] == root) break
    }
    break
  }
}
/* end if */

// Server
gulp.task("server", ["styles", "scripts"], () => {
  browserSync.init({
    /* if using Local by Flywheel */
    notify: false,
    open: "local",
    proxy: {
      target: "http://scrapper.local/",
      ws: true
    },
    ghostMode: true,
    https: false,
    watchOptions: {
      debounceDelay: 1000
    },
    /* else if using MAMP ? */
    // proxy   : `http://localhost/${local}`,
    /* end if */
    browser: "Google Chrome"
  });

  gulp.watch([
    "sources/styles/**/*.scss",
    "sources/styles/*.scss"
  ], ["styles"]);
});

// Styles
gulp.task("styles", () => {
  return gulp.src("sources/styles/app.scss")
    .pipe($.plumber())
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sass({includePaths: ["node_modules"]}))
    .on("error", $.notify.onError({
      title   : "Styles",
      message : message.error,
      sound   : "beep"
    }))
    .pipe($.autoprefixer({
      browsers: ["last 2 versions"],
      cascade: false
    }))
    .pipe($.sourcemaps.write("./"))
    .pipe(gulp.dest("assets/styles/"))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : "Styles",
      message : message.compiled,
      sound   : "beep"
    }));
});

// Scripts
let bundler = null

const bundle = () => {
  bundler.bundle()
    .pipe($.plumber())
    .on("error", $.notify.onError({
      title   : "Scripts",
      message : message.error,
      sound   : "beep"
    }))
    .pipe(source("app.js"))
    .pipe(buffer())
    .pipe($.sourcemaps.init({ loadMaps: true }))
    .pipe($.sourcemaps.write("./"))
    .pipe(gulp.dest("assets/scripts/"))
    .pipe(browserSync.stream())
    .pipe($.notify({
      title   : "Scripts",
      message : message.transpiled,
      sound   : "beep"
    }));
};

gulp.task("scripts", () => {
  bundler = browserify({
    entries : "sources/scripts/app.js",
    debug   : true,
    paths   : ["./node_modules", "sources/scripts/"]
  })
  .transform(vueify)
  .transform(babelify)
  bundler.plugin(watchify)
  bundler.on("update", bundle)
  bundle();
});

// CSS
gulp.task("minify_css", () => {
  return gulp.src("assets/styles/app.css")
    .pipe($.cssnano())
    .on("error", $.notify.onError({
      title   : "Styles",
      message : message.error,
      sound   : "beep"
    }))
    .pipe(gulp.dest("assets/styles/"))
    .pipe($.notify({
      title   : "Styles",
      message : message.minified,
      sound   : "beep"
    }));
});

// JS
gulp.task("minify_js", () => {
  return gulp.src("assets/scripts/app.js")
    .pipe($.uglify())
    .on("error", $.notify.onError({
      title   : "Scripts",
      message : message.error,
      sound   : "beep"
    }))
    .pipe(gulp.dest("assets/scripts/"))
    .pipe($.notify({
      title   : "Scripts",
      message : message.minified,
      sound   : "beep"
    }));
});

// Images
gulp.task("minify_img", () => {
  return gulp.src("assets/images/*.+(png|jpg|jpeg|gif|svg)")
    .pipe($.imagemin())
    .on("error", $.notify.onError({
      title   : "Images",
      message : message.error,
      sound   : "beep"
    }))
    .pipe(gulp.dest("assets/images/"))
    .pipe($.notify({
      title   : "Images",
      message : message.minified,
      sound   : "beep"
    }));
});

// Maps
gulp.task("clear", () => {
  return gulp.src([
    "assets/scripts/app.js.map",
    "assets/styles/app.css.map"
  ])
    .pipe($.clean({
      force: true,
      read: false
    }))
    .on("error", $.notify.onError({
      title   : "Maps",
      message : message.error,
      sound   : "beep"
    }))
    .pipe($.notify({
      title   : "Maps",
      message : message.cleaned,
      sound   : "beep"
    }));
});

// Production
gulp.task("prod", ["minify_css", "minify_js", "minify_img", "clear"]);

// Run
gulp.task("default", ["server"]);

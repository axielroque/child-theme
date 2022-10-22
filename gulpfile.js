const { src, dest, series, parallel, watch } = require("gulp");
const gulpif = require("gulp-if");
const babel = require("gulp-babel");
const rename = require("gulp-rename");
const sass = require("gulp-sass")(require("sass"));
const sourcemaps = require("gulp-sourcemaps");
const cleanCss = require("gulp-clean-css");
const purgecss = require("gulp-purgecss");
const autoprefixer = require("autoprefixer");
const uglify = require("gulp-uglify");
const webpack = require("webpack-stream");
const del = require("del");
const browserSync = require("browser-sync");
const server = browserSync.create();

const PRO = process.env.NODE_ENV === "production" || false;

function browserReload(done) {
	server.reload();
	done();
}

function browserServe(done) {
	server.init({
		proxy: "http://localhost/",
		open: "external",
	});
	done();
}

function taskStyles() {
	const tailwindcss = require("tailwindcss");
	const postcss = require("gulp-postcss");
	return src("src/css/main.css")
		.pipe(sourcemaps.init())
		.pipe(sass().on("error", sass.logError))
		.pipe(postcss([tailwindcss("./tailwind.config.js"), autoprefixer]))
		.pipe(
			gulpif(
				PRO,
				cleanCss({ debug: true }, (details) => {
					console.log(
						`${details.name}: ${details.stats.originalSize}`
					);
					console.log(
						`${details.name}: ${details.stats.minifiedSize}`
					);
				})
			)
		)
		.pipe(purgecss({ content: ["**/*.html", "**/*.php"] }))
		.pipe(gulpif(!PRO, sourcemaps.write()))
		.pipe(server.stream())
		.pipe(dest("dist/css"));
}
exports.taskStyles = taskStyles;

function taskImages() {
	return src("src/img/**/*.{jpg,jpeg,png,svg,gif}").pipe(dest("dist/img"));
}
exports.taskImages = taskImages;

function taskScripts() {
	return src(["src/js/main.js"])
		.pipe(
			webpack({
				module: {
					rules: [
						{
							test: /\.js$/,
							use: {
								loader: "babel-loader",
								options: {
									presets: [],
								},
							},
						},
					],
				},
				mode: "none",
				devtool: !PRO ? "inline-source-map" : false,
				output: {
					filename: "main.js",
				},
			})
		)
		.pipe(uglify())
		.pipe(
			gulpif(
				PRO,
				uglify({
					compress: {
						drop_console: true,
					},
				})
			)
		)
		.pipe(dest("dist/js"));
}
exports.taskScripts = taskScripts;

function jsMinify() {
	return src("dist/js/main.js", { allowEmpty: true })
		.pipe(uglify())
		.pipe(rename("main.min.js"))
		.pipe(dest("dist/js/"));
}

function whatchForChanges() {
	watch("./src/css/**/*.css", taskStyles, browserReload);
	watch("./src/img/**/*.{jpg,jpeg,png,svg,gif}", taskImages, browserReload);
	watch(
		["./src/**/*", "!src/{img,js,css}", "!src/{img,js,css}/**/*"],
		taskCopy
	);
	watch("./**/*.php", browserReload);
	watch("./src/js/**/*.js", taskScripts, browserReload);
}
exports.whatchForChanges = whatchForChanges;

function taskCopy() {
	return src([
		"src/**/*",
		"!src/{img,js,css}",
		"!src/{img,js,css}/**/*",
	]).pipe(dest("dist"));
}
exports.taskCopy = taskCopy;

function taskClean() {
	return del(["dist", "bundled"]);
}
exports.taskClean = taskClean;

exports.dev = series(
	taskClean,
	parallel(taskStyles, taskImages, taskCopy, taskScripts),
	whatchForChanges
);

exports.default = series(
	taskClean,
	parallel(taskStyles, taskImages, taskCopy, taskScripts),
	whatchForChanges
);

const ServeFiles = browserServe;
const prodjs = parallel(taskScripts, jsMinify);
const serveBuild = parallel(taskStyles, taskImages, taskCopy, taskScripts);

exports.build = series(
	taskClean,
	parallel(taskStyles, taskImages, taskCopy, prodjs)
);

exports.serve = series(serveBuild, parallel(whatchForChanges, ServeFiles));

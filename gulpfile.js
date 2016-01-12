var gulp = require('gulp'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps');
    autoprefixer = require('gulp-autoprefixer'),
    minifycss = require('gulp-minify-css'),
    minify = require('gulp-minify'),    
    livereload = require('gulp-livereload'),
    replace = require('gulp-replace'),
    prompt = require('gulp-prompt')
    
gulp.task('styles', function(){
	gulp.src('scss/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass.sync().on('error', function (err) {
			console.error('Error!', err.message);
		}))
		.pipe(autoprefixer())
		.pipe(minifycss())
		.pipe(sourcemaps.write('.', {includeContent: false}))
		.pipe(gulp.dest(''))
		.pipe(livereload());
});

gulp.task('editor-style', function(){
	gulp.src('scss/editor/*.scss')
		.pipe(sourcemaps.init())
		.pipe(sass.sync().on('error', function (err) {
			console.error('Error!', err.message);
		}))
		.pipe(autoprefixer())
		.pipe(minifycss())
		.pipe(sourcemaps.write('.', {includeContent: false}))
		.pipe(gulp.dest('css'))
		.pipe(livereload());
});

gulp.task('minify-js', function() {
  gulp.src('js/*.js')
    .pipe(minify({
        ext:{
            src:'.min.js',
            min:'.min.js'
        },
        ignoreFiles: ['.combo.js', '-min.js']
    }))
    .pipe(gulp.dest('js/min'))
});

gulp.task('default',['styles','editor-style','minify-js']);

gulp.task('watch', function() {
	
	livereload.listen();
	
	// Watch .scss files
	gulp.watch('scss/*.scss', ['styles']);
	gulp.watch('scss/**/*.scss', ['styles']);
	gulp.watch('scss/editor/*.scss', ['editor-style']);
    gulp.watch('js/*.js', ['minify-js']);
});

var theme = [];

gulp.task('generate', ['questions'], function(){

	return gulp.src('**/*.{php,scss}')
		.pipe(replace('themeName', theme.theName))
		.pipe(replace('themeHandle', theme.theHandle))
		.pipe(replace('themeFunction', theme.theFunction))
		.pipe(replace('themeTextDomain', theme.theTextDomain))
		.pipe(replace('themeURI', theme.uri))
		.pipe(replace('themeAuthor', theme.author))
		.pipe(replace('authorURI', theme.authuri))
		.pipe(replace('themeDesigner', theme.designer))
		.pipe(replace('designerURI', theme.desiuri))
		.pipe(replace('themeDescription', theme.desc))
		.pipe(gulp.dest(''));

});

gulp.task('questions', function(){

	return gulp.src('**/*')
		.pipe(prompt.prompt([{
	        type: 'input',
	        name: 'themename',
	        message: 'What is your theme name?'
	    },
	    {
	        type: 'input',
	        name: 'uri',
	        message: 'What is your theme URL?'
	    },
	    {
	        type: 'input',
	        name: 'author',
	        message: 'Who is the theme developer/author?'
	    },
	    {
	        type: 'input',
	        name: 'authuri',
	        message: 'What is the developer/author\'s URL?'
	    },
	    {
	        type: 'input',
	        name: 'designer',
	        message: 'Who is the theme designer?'
	    },
	    {
	        type: 'input',
	        name: 'desiuri',
	        message: 'What is the theme designer\'s URL?'
	    },
	    {
	        type: 'input',
	        name: 'desc',
	        message: 'What is the theme\'s description?'
	    }
	    ], function(res){
	        theme.theName = res.themename;
			theme.theHandle = theme.theName.replace(new RegExp(' '),'_');
			theme.theFunction = theme.theHandle.toLowerCase();
			theme.theTextDomain = theme.theFunction.replace(new RegExp('_'),'-');
			theme.uri = res.uri;
			theme.author = res.author;
			theme.authuri = res.authuri;
			theme.designer = res.designer;
			theme.desiuri = res.desiuri;
			theme.desc = res.desc;
	    }));

});

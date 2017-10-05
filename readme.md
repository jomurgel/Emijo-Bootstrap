Emijo-Bootstrap Starter Theme 
=================

**NOTE This repo is no longer actively developed. Feel free to fork and make something new!**

This is a clean WordPress starter theme based on the Emi starter theme.  A solid starting point when thinking about structure, SEO and other functionality.

Also built with Susy, which can be found [Here](https://github.com/jomurgel/Emijo).

Features
------------
* @media queries via [Breakpoint](http://breakpoint-sass.com/) - Right in your _mixins.scss file. 
* Mixins for Fixed Footers, Breakpoints, Several Effects and Retina Images.
* Simple URL redirect template from [Dave Stewart](http://www.davestewart.co.uk) - tweaked for use with local and external URLs.
* Added [Schema](http://www.schema.org) support.
* Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
* Icon, Google Fonts and Typekit enqueue support (including Typekit in TinyMCE).
* TinyMCE Functionality
* FontAwesome baked in.
* Favicons.
* Picturefill.js Support
* All using the Bootstrap Framework.
* SVG support

Set Up
------------
Find and replace the following strings using gulp generate:

`themeName` > `Theme Name`

`themeHandle` > `Theme_Name`

`themeFunction` > `theme_name`

`themeTextDomain` > `theme-name`

Workflow
------------
Install [Gulp](http://gulpjs.com/) to automate the following tasks:

From terminal
```
$ cd themefolderlocation

$ npm install
```
If errors occur, try `sudo` before `npm`.

This theme uses [Gulp](http://gulpjs.com/) to automate the following tasks:
* Sass preprocessing
* Auto browser prefixing (via [Autoprefixer](https://github.com/ai/autoprefixer))
* Minifying CSS
* [LiveReload](http://livereload.com/) `$ npm gulp watch`
* Gulp Sourcemaps
* Separate Tiny MCDE Stylesheet

Changelog
------------
3.1 Added SVG support, defer javascript function, jpeg compression quality control (all in customization.php).  Added a few new mixins.

3.0.1 Added Bootstrap support.

3.0 MAJOR UPDATE.  Updated for Susy.  General cleanup and organization.  

2.3 A great feature (gulp-replace) added by [lachieh](https://github.com/lachieh) for replacing strings such as ThemeName, etc. using gulp-generate. Thanks!

2.2.1 Gulpfile.js adds gulp-sourcemaps, updated package.json license.

2.2 Updated screenshot.png and added Apple Icon, Favicon and Windows Icon Support

2.1 Added pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin

2.0 Added Schema, Google Fonts/Typekit support 

1.1 General cleanup and tidying  

1.0 Initial public release

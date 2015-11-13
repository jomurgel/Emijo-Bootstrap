Emijo-Bootstrap Starter Theme 
=================

This is a clean WordPress starter theme based on the Emi starter theme.  A solid starting point when thinking about structure, SEO and other functionality.

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
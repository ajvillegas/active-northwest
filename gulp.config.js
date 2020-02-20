/**
 * Gulp Configuration File
 *
 * 1. Edit the variables as per your project requirements.
 * 2. In paths you can add <<glob or array of globs>>.
 */

module.exports = {

	// Project options.
	projectURL: 'http://dev.pcc.com/cas222/template/', // Local project URL of your already running site.
	sslKey: '/Applications/MAMP/Library/OpenSSL/certs/dev.pcc.com.key', // Path to SSL localhost.key
	sslCert: '/Applications/MAMP/Library/OpenSSL/certs/dev.pcc.com.crt', // Path to SSL localhost.crt
	productURL: './', // Leave it like it is, since our gulpfile.js lives in the root folder.
	browserAutoOpen: false,
	injectChanges: true,

	// Style options.
	styleSRC: './assets/css/scss/style.scss', // Path to main .scss file.
	styleDestination: './assets/css/', // Path to place the compiled CSS file.
	outputStyle: 'compact', // Available options → 'compact' or 'compressed' or 'nested' or 'expanded'.
	errLogToConsole: true,
	precision: 10,

	// JS Vendor options.
	jsVendorSRC: './assets/js/vendor/*.js', // Path to JS vendor folder.
	jsVendorDestination: './assets/js/', // Path to place the compiled JS vendors file.
	jsVendorFile: 'vendor', // Compiled JS vendors file name. Default set to vendors i.e. vendors.js.

	// JS Custom options.
	jsCustomSRC: './assets/js/custom/*.js', // Path to JS custom scripts folder.
	jsCustomDestination: './assets/js/', // Path to place the compiled JS custom scripts file.
	jsCustomFile: 'custom', // Compiled JS custom file name. Default set to custom i.e. custom.js.

	// Images options.
	imgSRC: './assets/images/raw/**/*', // Source folder of images which should be optimized and watched. You can also specify types e.g. raw/**.{png,jpg,gif} in the glob.
	imgDST: './assets/images/', // Destination folder of optimized images. Must be different from the imagesSRC folder.

	// Watch files paths.
	watchStyles: './assets/css/scss/**/*.scss', // Path to all *.scss files inside scss folder and inside them.
	watchJsVendor: './assets/js/vendor/*.js', // Path to all vendor JS files.
	watchJsCustom: './assets/js/custom/*.js', // Path to all custom JS files.
	watchHTML: './**/*.html', // Path to all HTML files.
	watchPHP: './**/*.php', // Path to all PHP files.

	// Browsers you care about for autoprefixing. Browserlist https://github.com/ai/browserslist
	BROWSERS_LIST: [
		'last 2 version',
		'> 1%',
		'ie >= 11',
		'last 1 Android versions',
		'last 1 ChromeAndroid versions',
		'last 2 Chrome versions',
		'last 2 Firefox versions',
		'last 2 Safari versions',
		'last 2 iOS versions',
		'last 2 Edge versions',
		'last 2 Opera versions'
	]
};

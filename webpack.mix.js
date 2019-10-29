const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

//mix.js('resources/js/app.js', 'public/js')
//mix.sass('resources/sass/app.scss', 'public/css');

//**************** CSS ******************** 
//css
mix.copy('resources/vendors/pace-progress/css/pace.min.css', 'public/css'); //V
mix.copy('node_modules/@coreui/coreui-chartjs/dist/css/coreui-chartjs.css', 'public/css'); //V
//main css
mix.sass('resources/sass/style.scss', 'public/css');

//************** SCRIPTS ****************** 
// general scripts
mix.copy('node_modules/pace-progress/pace.min.js', 'public/js');  //V 
mix.copy('node_modules/@coreui/coreui/dist/js/coreui.bundle.min.js', 'public/js');  //V
// views scripts
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js');  //V
mix.copy('node_modules/@coreui/coreui-chartjs/dist/js/coreui-chartjs.js', 'public/js'); //V
// details scripts
mix.js('resources/js/coreui/main.js', 'public/js');
mix.js('resources/js/coreui/colors.js', 'public/js');
mix.js('resources/js/coreui/charts.js', 'public/js');
mix.js('resources/js/coreui/widgets.js', 'public/js');
mix.js('resources/js/coreui/popovers.js', 'public/js');
mix.js('resources/js/coreui/tooltips.js', 'public/js');
//*************** OTHER ****************** 
//fonts
mix.copy('node_modules/@fortawesome/fontawesome-free/css/', 'public/css');
mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
mix.copy('node_modules/@fortawesome/fontawesome-free/webfonts', 'public/webfonts');
//icons
mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css');
mix.copy('node_modules/flag-icon-css/css/flag-icon.min.css', 'public/css');
//flags
mix.copy('node_modules/flag-icon-css/flags', 'public/flags');
//images
mix.copy('resources/assets', 'public/assets');

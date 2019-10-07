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

mix.styles([
   'node_modules/@coreui/icons/css/coreui-icons.min.css',
   'node_modules/flag-icon-css/css/flag-icon.min.css',
   'node_modules/font-awesome/css/font-awesome.min.css',
   'node_modules/simple-line-icons/css/simple-line-icons.css',
   'resources/vendors/pace-progress/css/pace.min.css',
], 'public/css/all.css');

//main scripts
mix.sass('resources/sass/style.scss', 'public/css');

// general scripts (do not working witch mix.js method )
mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
mix.copy('node_modules/popper.js/dist/umd/popper.min.js', 'public/js');
mix.copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js');
mix.copy('node_modules/pace-progress/pace.min.js', 'public/js'); 
mix.copy('node_modules/perfect-scrollbar/dist/perfect-scrollbar.min.js', 'public/js');
mix.copy('node_modules/@coreui/coreui/dist/js/coreui.min.js', 'public/js');

// views scripts (do not working witch mix.js method )
mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js');
mix.copy('node_modules/@coreui/coreui-plugin-chartjs-custom-tooltips/dist/js/custom-tooltips.min.js', 'public/js');

// details scripts
mix.js('resources/js/coreui/main.js', 'public/js');
mix.js('resources/js/coreui/colors.js', 'public/js');
mix.js('resources/js/coreui/charts.js', 'public/js');
mix.js('resources/js/coreui/widgets.js', 'public/js');
mix.js('resources/js/coreui/popovers.js', 'public/js');
mix.js('resources/js/coreui/tooltips.js', 'public/js');

//fonts
mix.copy('node_modules/font-awesome/fonts', 'public/fonts');
mix.copy('node_modules/simple-line-icons/fonts', 'public/fonts');
mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
//flags
mix.copy('node_modules/flag-icon-css/flags', 'public/flags');

//images
mix.copy('resources/img', 'public/img');

/*  testowy loader - usunąć później */
mix.js('resources/js/coreui/loader.js', 'public/js');
let mix = require('laravel-mix');

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

/*
 |--------------------------------------------------------------------------
 | Backend
 |--------------------------------------------------------------------------
 |
 */
mix.scripts([
    'node_modules/jquery/dist/jquery.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/jquery-validation/dist/jquery.validate.js',
    'node_modules/datatables.net/js/jquery.dataTables.js',
    'node_modules/datatables.net-bs/js/dataTables.bootstrap.js',
    'node_modules/bootstrap-datepicker/dist/js/bootstrap-datepicker.js',
    'node_modules/select2/dist/js/select2.js',
    'node_modules/toastr/toastr.js',
    'node_modules/piexifjs/piexif.js',
    'node_modules/bootstrap-fileinput/js/fileinput.js',
    'resources/assets/iCheck/icheck.js',
	'resources/assets/adminlte/js/adminlte.js',
    'resources/assets/adminlte/js/page/dashboard2.js', 
    'resources/assets/backend/js/custom.js',
], 'public/js/backend.js');

mix.styles([
    'node_modules/bootstrap/dist/css/bootstrap.css',
    'node_modules/datatables.net-bs/css/dataTables.bootstrap.css',
    'node_modules/bootstrap-datepicker/dist/css/bootstrap-datepicker.css',
    'node_modules/select2/dist/css/select2.css',
    'node_modules/toastr/build/toastr.css',
    'resources/assets/iCheck/square/blue.css',
    'node_modules/font-awesome/css/font-awesome.css',
    'node_modules/ionicons/dist/css/ionicons.css',
    'node_modules/bootstrap-fileinput/css/fileinput.css',
    'resources/assets/toggleSwitch/toggle-switch.css',
    'resources/assets/adminlte/css/AdminLTE.css',
    'resources/assets/adminlte/css/skins/_all-skins.min.css',
    'resources/assets/backend/css/custom.css',
], 'public/css/backend.css');

mix.copyDirectory('resources/assets/backend/images', 'public/images');
mix.copyDirectory('node_modules/bootstrap/fonts', 'public/fonts');
mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts');
mix.copyDirectory('node_modules/ionicons/dist/fonts', 'public/fonts');

/*
 |--------------------------------------------------------------------------
 | Frontend
 |--------------------------------------------------------------------------
 |
 */
mix.scripts([
    'resources/assets/frontend/js/jquery.min.js',
    'node_modules/bootstrap/dist/js/bootstrap.js',
    'node_modules/jquery-validation/dist/jquery.validate.js',
    'resources/assets/frontend/js/jquery.flexisel.js',
    'resources/assets/frontend/js/jquery.etalage.min.js',
    'resources/assets/frontend/js/jquery.wmu.Slider.js',
    'node_modules/toastr/toastr.js',
    'node_modules/piexifjs/piexif.js',
    'node_modules/bootstrap-fileinput/js/fileinput.js',
    'resources/assets/frontend/js/custom.js',
], 'public/js/frontend.js');

mix.styles([
    'resources/assets/frontend/css/bootstrap.css',
    'resources/assets/frontend/css/etalage.css',
    'node_modules/toastr/build/toastr.css',
    'resources/assets/frontend/css/form.css',
    'node_modules/font-awesome/css/font-awesome.css',
    'node_modules/bootstrap-fileinput/css/fileinput.css',
    'resources/assets/toggleSwitch/toggle-switch.css',
    'resources/assets/frontend/css/style.css',
    'resources/assets/frontend/css/custom.css',
], 'public/css/frontend.css');

mix.copyDirectory('resources/assets/frontend/images', 'public/images');
mix.copyDirectory('node_modules/font-awesome/fonts', 'public/fonts');
mix.copyDirectory('resources/assets/frontend/fonts', 'public/fonts');

/*
 |--------------------------------------------------------------------------
 | Error Page
 |--------------------------------------------------------------------------
 |
 */

mix.styles([
    'node_modules/font-awesome/css/font-awesome.css',
    'resources/assets/error/css/style.css',
], 'public/css/error.css');

mix.copyDirectory('resources/assets/error/images', 'public/images');
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

mix.js('resources/js/app.js', 'public/js')
   .sass('resources/sass/app.scss', 'public/css')
    // SWEET ALERT
    .styles([
      'resources/assets/sweetalert2/css/sweetalert2.min.css'
  ],'public/assets/sweetalert2/css/sweetalert2.min.css')
  .scripts([
      'resources/assets/sweetalert2/js/sweetalert2.min.js'
  ],'public/assets/sweetalert2/js/sweetalert2.min.js')


  // SELECT2
  .styles([
      'resources/assets/select2/css/select2.css'
  ],'public/assets/select2/css/select2.css')
  .scripts([
      'resources/assets/select2/js/select2.js'
  ],'public/assets/select2/js/select2.js')

  // DATATABLES
  .styles(['resources/assets/DataTables/datatables.css'], 'public/assets/DataTables/datatables.css')
  .scripts(['resources/assets/DataTables/datatables.js'],'public/assets/DataTables/datatables.js')
  .copyDirectory(['resources/assets/DataTables/DataTables/images'],'public/assets/DataTables/DataTables/images')


  .version() ;
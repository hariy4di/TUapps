<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });


Route::get('testa', function () {
    // print_r(Flysystem::connection('webdav')->listContents('remote.php/webdav/'));
    
    $data = Flysystem::connection('webdav')->put('test.txt', 'hai hai');
    print_r("udahan");
    die();
});


Route::resource('uker','UkerController');
Route::resource('type_kredit','TypeKreditController');
Route::resource('rincian_kredit','RincianKreditController');
Route::resource('angka_kredit','AngkaKreditController');
Route::resource('user','UserController');
Route::resource('log_book','LogBookController');
Route::post('log_book/data_log_book', 'LogBookController@dataLogBook');
Route::get('log_book/{id}/print', 'LogBookController@print');
Route::get('log_book/{id}/komentar', 'LogBookController@dataKomentar');
Route::post('log_book/save_komentar', 'LogBookController@saveKomentar');

Route::resource('ckp','CkpController')->except(['show']);

// Route::resource('attribute_pos','AttributePosController')->except(['show']);
Route::post('ckp/data_ckp', 'CkpController@dataCkp');
// Route::get('ckp/print', 'CkpController@print');
Route::post('ckp/print',array('as'=>'print','uses'=>'CkpController@print'));

//SPATIE
Route::resource('role','RoleController');
Route::resource('permission','PermissionController');
Route::resource('user_role','UserRoleController');

Route::resource('pegawai_anda','PegawaiAndaController');

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('guest', 'HomeController@guest')->name('guest');

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

Route::get('/', 'DirectorController@index');

// function () {
//     return view('content.index');
// });

#add a person
Route::get('/add', 'DirectorController@add');
Route::post('/add', 'DirectorController@adding');

Route::get('/read', 'DirectorController@read');
#for getting to the forms page
Route::get('/{id}', 'DirectorController@edit');
Route::put('/{id}', 'DirectorController@update');
#for processing
Route::get('/{id}/delete', 'DirectorController@delete');


Route::get('/debug', function () {

    $debug = [
        'Environment' => App::environment(),
        'Database defaultStringLength' => Illuminate\Database\Schema\Builder::$defaultStringLength,
    ];
    try {
        $databases = DB::select('SHOW DATABASES;');
        $debug['Database connection test'] = 'PASSED';
        $debug['Databases'] = array_column($databases, 'Database');
    } catch (Exception $e) {
        $debug['Database connection test'] = 'FAILED: '.$e->getMessage();
    }

    dump($debug);
});

<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    // $array= ['name'=>'khawar', 'age'=>22,'contact'=> 0303555434 ];
    
    return view('welcome');
});
Route::get('/demopath',function(){
    return view('welcome');
});
// Route::get('/khawar',fucntion(){
// return   echo "hoeelo khawar";
// });

Route::post('/demopost', function(){

});


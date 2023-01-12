<?php

use Illuminate\Support\Facades\Route;
use App\Models\Student_online;
use App\Http\Controllers\MembersController;
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

Route::get('/', function () {
    return view('welcome');

});
Route::get('/student_online',function(){
    $Student_online= student_online::all();
    echo "<pre>";
    print_r($Student_online);
});
Route::view('add', 'addmembers');
route::post('add',[MembersController::class,'addata']);
route::get('list',[MembersController::class,'show']);
route::get('delete/{id}',[MembersController::class,'delete']);
route::get('edit/{id}',[MembersController::class,'showData'])->middleware('CheckAge');
route::post('edit',[MembersController::class,'update']);
route::view('noaccess', 'noaccess');
Route::view('users', 'users');
Route::group(['middleware'=>['CheckAge']],function(){
Route::view('users', 'users');
});

// route::post('edit',[MembersController::class,'update']);
// route::get('edit',[MembersController::class,'update']);

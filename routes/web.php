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

Route::get('/', function () {
    
    return view('welcome');
});
Route::get('/login/test','Auth\LoginController@getLogin');
Route::post('/login/test','Auth\LoginController@postLogin');
Route::post('/reg','Auth\RegisterController@create');








/* 
use Illuminate\Support\Facades\DB;
use App\models\User_php;
use App\models\Users; 
 Route::get('/user', function () {
     $users=DB::table('user')->get();
     $arr=[];
    foreach ($users as $key => $value) {
        array_push($arr, $value);
    }
     $target=DB::table('user')->where('username', 'wbl')->get();
    return json_encode($arr);
});

Route::get('/test', function () {
    $users=DB::table('user')->get();
    $arr=[];
    foreach ($users as $key => $value) {
        array_push($arr, $value);
    }
    return view('test')->with('ct', $arr);
}); */

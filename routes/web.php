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
use Illuminate\Support\Facades\DB;

Route::get('/', function () {
    
    return view('welcome');
});

Route::get('/user', function () {
     $users=DB::table('user')->get();
     $arr=[];
     foreach ($users as $key => $value) {
         array_push($arr,$value);
     }
     $target=DB::table('user')->where('username','wbl')->get();
    return json_encode($arr);
});

Route::get('/test',function(){
    $users=DB::table('user')->get();
    $arr=[];
    foreach ($users as $key => $value) {
        array_push($arr,$value);
    }
    return view('test')->with('ct',$arr);
});

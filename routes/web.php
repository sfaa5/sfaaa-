<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/students', function () {
    $arr=[
        'students'=>[
            [
                'id'=>1,
                'name'=>'sam7i'
            ],
             [
                'id'=>2,
                'name'=>'mo7aa'
            ],
             [
                'id'=>3,
                'name'=>'nobil'
            ],
             [
                'id'=>4,
                'name'=>'mohamed'
            ],
        
        
        ]

    ];
    return view('students',$arr);
});

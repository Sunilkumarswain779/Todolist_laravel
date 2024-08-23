<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RouteController;
use App\Http\Controllers\Student_data;

Route::get('/', function () {
    return view('home');
});

#Home Routing
// Route::get('/home', function(){
//     return view('home');
// });
Route::get('/home',[RouteController::class,'home'])->name('home');
#End Home routing


#About routing
// Route::get('/about', function(){
//     return view('about');
// });

Route::get('/about', [RouteController::class,'about'])->name('about');
#End About routing

#Post Routing
// Route::get('/post', function(){
//     return view('post');
// });
Route::get('/post', [RouteController::class, 'post'])->name('post');

#End post Ruting
Route::get('/show',[Student_data::class,'show'])->name('student.data');
Route::get('/form',[Student_data::class,'form'])->name('student.form');
Route::get('/details/{id}', [Student_data::class,'details'])->name('details');
Route::get('/delete/{id}',[Student_data::class, 'delete'])->name('delete');
Route::post('/insert',[Student_data::class,'insert_data'])->name('insert.data');
Route::get('/update/{id}',[Student_data::class,'update_data'])->name('update');
Route::post('/update_user/{id}',[Student_data::class,'update_user'])->name('update_user');




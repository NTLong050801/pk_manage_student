<?php
use ntlongg\demo\Http\Controllers\DemoController;
use ntlongg\demo\Http\Controllers\CRUDController;
Route::get('demo',[DemoController::class,"index"]);

Route::get('curd',[CRUDController::class,"index"])->name('curd.index');
// Route::get('curd',function(){
//     return view('home');
// })->name('curd.index');

Route::get('curd/create',[CRUDController::class,"create"])->name('curd.create');

Route::post('curd',[CRUDController::class,"store"])->name('curd.store');

Route::get('curd/{id}',[CRUDController::class,"show"])->name('curd.show');

Route::get('curd/{id}/edit',[CRUDController::class,"edit"])->name('curd.edit');

Route::put('curd/{id}',[CRUDController::class,"update"])->name('curd.update');

Route::delete('curd/{id}',[CRUDController::class,"destroy"])->name('curd.destroy');
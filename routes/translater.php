<?php

use Lara\MyTranslater\Http\TranslaterController;


Route::group(['prefix'=>'translate', 'as' =>'translate.'],function(){
   Route::get('/',[TranslaterController::class, 'index'])->name('index');
   Route::post('/pronoun',[TranslaterController::class, 'pronoun'])->name('pronoun');
});


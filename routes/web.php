<?php

Route::get('/product','productcontroller@index')-> name('product');
         //link         //controllername@productname




  Route::get('/', function () {
    return view('welcome');
  });

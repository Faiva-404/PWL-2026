<?php

use Illuminate\Support\Facades\Route;

Route::get('/greeting', function () {
	return view('hello', ['name' => 'Faiva']);
});





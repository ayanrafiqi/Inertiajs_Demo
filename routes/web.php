<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;




Route::get('/home',[WelcomeController::class,'show']);


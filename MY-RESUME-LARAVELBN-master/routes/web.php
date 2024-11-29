<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DetailController;

Route::get('/', [DetailController::class, 'indexs']

);

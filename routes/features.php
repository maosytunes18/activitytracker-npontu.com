<?php

use Illuminate\Support\Facades\Route;

Route::view('/features', 'features')->name('features.index');
Route::view('/insights', 'insights')->name('insights.index');
Route::view('/network', 'network')->name('network.index');


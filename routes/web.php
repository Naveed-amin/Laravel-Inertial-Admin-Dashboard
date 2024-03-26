<?php

use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

Route::get('/', function () {
    return Inertia::render('Testing');
});

Route::get('dashboard/admin', function () {
    return Inertia::render('Dashboard/Master');
});


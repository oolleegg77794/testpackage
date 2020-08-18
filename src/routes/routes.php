<?php
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckForMaintenanceMode;

Route::get('/testPackage', function () {
    return view('testpackage::testview');
})->middleware(CheckForMaintenanceMode::class);

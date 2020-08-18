<?php
use Illuminate\Support\Facades\Route;

Route::middleware(config('middleware')) ->get('/testPackage', function () {
    return view('testpackage::testview');
});

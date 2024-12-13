<?php

use App\Http\Middleware\BlockByIP;
use App\Http\Middleware\IpBlockedMiddleware;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Stmt\Block;

// Route::get('/', function (Request $request) {
//     // return $request->ip();
//     return view('welcome');
// })->middleware(IpBlockedMiddleware::class);

// Route::get('/', function (Request $request) {
//     // return $request->ip();
//     return view('welcome');
// })->middleware(BlockByIP::class);


/* Route No Access to visitors */
Route::middleware([BlockByIP::class])->group(function () {
    Route::get('/', function () {
        return view('welcome');
    });
});

/* Route Access to visitors */
Route::get('/home', function () {
    return view('welcome');
});

<?php

use Illuminate\Http\Request;
use \App\User;
use Illuminate\Support\Facades\DB;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/online-count', function (Request $request) {
    echo(DB::select('select count(*) c from users where online = ? ', [1])[0]->c);
});

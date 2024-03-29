<?php

// use Illuminate\Http\Request;
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
$api = app('Dingo\Api\Routing\Router');



$api->version('v1', ['middleware' => 'cors'], function($api) {
    $api->resource('movies', 'App\Http\Controllers\MovieController');
    $api->get('castcrew/{movieId}', 'App\Http\Controllers\CasteCrewController@index');
    $api->resource('member_type', 'App\Http\Controllers\MemberTypeController');
    $api->resource('members', 'App\Http\Controllers\MemberController');
    $api->resource('users', 'App\Http\Controllers\UserController');
});

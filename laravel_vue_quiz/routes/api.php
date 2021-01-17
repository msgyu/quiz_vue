<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// Route::group(['middleware' => ['api']], function () {
// });
Route::get('information', 'InformationController@index');
Route::get('category', 'CategoryController@index');
Route::get('quiz', 'QuizController@index');
Route::post('/insertRanking', 'RankController@insertRanking');
Route::get('ranking', 'Api\RankController@index');
Route::get('keyword', 'Api\KeywordController@index');
Route::middleware('auth:api')->get('/mypage', 'Api\MypageController@index');

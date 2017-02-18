<?php

use app\apiController;

Route::get('/api/team/league={league}', 'apiController@getLeagueRecords');
Route::get('/api/team/{id}', 'apiController@getSingleRecord');
Route::delete('/api/team/{id}', 'apiController@deleteRecord');
Route::get('/api/team', 'apiController@getTeamRecords');
Route::post('/api/team/{id}', 'apiController@editSingleRecord');
Route::post('/api/team', 'apiController@postNewRecord');

use App\frontEndController;

Route::get('/', 'frontEndController@getAllRecords');
Route::get('/frontEnd/team/league={league}', 'frontEndController@getLeagueRecords');
Route::get('/frontEnd/team/{id}', 'frontEndController@getSingleRecord');
Route::get('/frontEnd/delete/{id}', 'frontEndController@deleteRecord');
Route::get('/frontEnd/team', 'frontEndController@getTeamRecords');
Route::post('/frontEnd/team/{id}', 'frontEndController@editSingleRecord');
Route::post('/frontEnd/team', 'frontEndController@postNewRecord');

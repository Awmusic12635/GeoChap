<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/
use App\Cache;

Route::get('/', function () {
    return view('index');
});

/*
 * Cache routes
 */

Route::get('/caches', 'CacheController@listCaches');
Route::get('/caches/{cacheId}', 'CacheController@showCache');
//add functions for these
Route::get('/caches/{cacheId}/checkIn', 'CacheController@showCheckinForm')->middleware('auth');
Route::post('/caches/{cacheId}/checkIn', 'CacheController@checkIn')->middleware('auth');

Route::get('/caches/new', 'CacheController@newCacheForm')->middleware('auth'); //auth means only authenticated users can access this route
Route::post('/caches', 'CacheController@newCacheCreation')->middleware('auth');

/*
 * Event routes
 */


Route::get('/events', 'EventController@listEvents');
Route::get('/events/{eventId}', 'EventController@showEvent');
Route::get('/events/new', 'EventController@newEventForm')->middleware('auth');
Route::post('/events', 'EventController@newEventCreation')->middleware('auth');

//probably need some route for handling the joining of an event. perhaps this?

Route::post('/events/{eventId}/join', 'EventController@joinEvent')->middleware('auth');

/*
 * Admin Routes
 */

//update controller function names and write the controller

Route::get('/admin', 'AdminController@showAdmin')->middleware('auth','admin_check');

Route::get('/admin/caches', 'AdminController@showCaches')->middleware('auth','admin_check');
Route::post('/admin/caches', 'AdminController@addCache')->middleware('auth','admin_check');
Route::get('/admin/caches/new', 'AdminController@newCacheForm')->middleware('auth','admin_check');
Route::get('/admin/caches/{cacheId}', 'AdminController@showAdmin')->middleware('auth','admin_check');
Route::post('/admin/caches/{cacheId}', 'AdminController@showAdmin')->middleware('auth','admin_check');
Route::get('/admin/caches/awaitingApproval', 'AdminController@showAdmin')->middleware('auth','admin_check');

Route::get('/admin/users', 'AdminController@showAdmin')->middleware('auth','admin_check');
Route::get('/admin/users/{userId}', 'AdminController@showAdmin')->middleware('auth','admin_check');
Route::post('/admin/users/{userId}', 'AdminController@showAdmin')->middleware('auth','admin_check');

Route::get('/admin/events', 'AdminController@showAdmin')->middleware('auth','admin_check');
Route::get('/admin/events/{eventId}', 'AdminController@showAdmin')->middleware('auth','admin_check');
Route::post('/admin/events/{eventId}', 'AdminController@showAdmin')->middleware('auth','admin_check');


/*
 * Users
 */

//update controller and names

Route::get('/users', 'UserController@showAdmin');
Route::get('/users/{userId}', 'UserController@showAdmin');


/*
 * Leadboard (maybe) - need to think about this one more.
 */

Route::get('/leaderboard', 'LeaderboardController@showAdmin');

/*
 * Auth routes
 */

//Handles all auth routes at /login and /register
Auth::routes();


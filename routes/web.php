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

Route::get('/','IndexController@showIndex');

/*
 * Cache routes
 */

Route::get('/caches', 'PublicCacheController@showCaches');
Route::get('/caches/new', 'PublicCacheController@newCacheForm')->middleware('auth'); //auth means only authenticated users can access this route
Route::get('/caches/{cacheId}', 'PublicCacheController@showCache');
//add functions for these
Route::get('/caches/{cacheId}/checkIn', 'PublicCacheController@showCheckinForm')->middleware('auth');
Route::post('/caches/{cacheId}/checkIn', 'PublicCacheController@checkIn')->middleware('auth');

Route::post('/caches', 'PublicCacheController@addCache')->middleware('auth');

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
Route::get('/admin/caches/awaitingApproval', 'AdminController@awaitingApproval')->middleware('auth','admin_check');
Route::get('/admin/caches/new', 'AdminController@newCacheForm')->middleware('auth','admin_check');
Route::get('/admin/caches/{cacheId}', 'AdminController@showCache')->middleware('auth','admin_check');
Route::post('/admin/caches/{cacheId}', 'AdminController@editCache')->middleware('auth','admin_check');


Route::get('/admin/users', 'AdminController@showUsers')->middleware('auth','admin_check');
Route::get('/admin/users/{userId}', 'AdminController@showUser')->middleware('auth','admin_check');
Route::post('/admin/users/{userId}', 'AdminController@editUser')->middleware('auth','admin_check');

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


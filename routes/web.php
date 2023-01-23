<?php

use Illuminate\Support\Facades\Route;

use Illuminate\Http\Request;

use App\Jobs;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'MainController@index');


Route::get('/show/{id}', 'MainController@show');

Route::get('/create-post', 'MainController@create');

Route::post('/store', 'MainController@store')->name('store.job');

Route::get('/eu-only', 'MainController@europe');

Route::get('/back-end', 'MainController@backend');

Route::get('/frontend', 'MainController@frontend');

Route::get('/management', 'MainController@manage');

Route::get('/us-only', 'MainController@united');

Route::get('/explore', 'MainController@search');

Route::get('/worldwide', 'MainController@worldwide');


Route::any('/search', function(Request $request){
    $q = $request->input('search');
    $job = Jobs::where('job_title','LIKE','%'.$q.'%')->orWhere('category','LIKE','%'.$q.'%')->get();
    if(count($job) > 0)
        return view('result')->withDetails($job)->withQuery ( $q );
    else return view ('result')->withMessage('No Details found. Try to search again !');
});


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MovieController;
use App\Http\Controllers\EventdaysController;
use App\Http\Controllers\ShowtimeController;
use App\Http\Controllers\AttendeeController;

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

Route::get('/', function () {
    // return view('layout.movies.index');
    return redirect()->route('movies.index');
});

Route::resource('/movies', MovieController::class);
Route::resource('/eventdays', EventdaysController::class);
Route::resource('/showtimes', ShowtimeController::class);
Route::resource('/attendees', AttendeeController::class);



Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    // Createing Routes :
    Route::get('/admin', "App\Http\Controllers\AdminController@index")->name("admin.index");
    Route::get('/admin/movies', "App\Http\Controllers\AdminController@movies")->name("admin.movies");
    Route::get('/admin/createeventday', "App\Http\Controllers\AdminController@creatEeventDay")->name("admin.createEventDay");
    Route::get('/admin/createmovie', "App\Http\Controllers\AdminController@createMovie")->name("admin.createMovie");
    Route::get('/admin/createhowtime', "App\Http\Controllers\AdminController@createShowTime")->name("admin.createShowTime");
    // Editing Routes :
    Route::get('/admin/editmovie/{id}', "App\Http\Controllers\AdminController@editmovie")->name("admin.editmovie");
    Route::post('/admin/updatemovie/{id}', "App\Http\Controllers\AdminController@updatemovie")->name("admin.updatemovie");

});

// Route::get("/students", "App\Http\Controllers\StudentController@index")->name("students.index");
// Route::get("/students/create", [StudentController::class, "create"])->name("students.create");
// Route::post('/students/store', [StudentController::class, "store"])->name("students.store");
// Route::get('students/show/{id}', [StudentController::class, "show"])->name("students.show");
// Route::get('students/edit/{id}', [StudentController::class, "edit"])->name("students.edit");
// Route::post('/students/update/{id}', [StudentController::class, "update"])->name("students.update");
// Route::get('students/delete/{id}', [StudentController::class, "destroy"])->name("students.delete");

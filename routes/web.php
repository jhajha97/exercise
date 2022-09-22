<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicantController;


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
    return view('index');
});
Route::get('applicant', [ApplicantController::class,'index']);
Route::get('add-record', [ApplicantController::class,'addRecord']);
Route::post('save-record', [ApplicantController::class,'storeRecord']);
Route::get('edit-record/{id}', [ApplicantController::class,'editRecord']);
Route::post('update-record', [ApplicantController::class,'updateRecord']);
Route::get('delete-record/{id}', [ApplicantController::class,'deleteRecord']);



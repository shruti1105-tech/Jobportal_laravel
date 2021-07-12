<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CityController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobController;
use App\Http\Controllers\UserHomePageController;

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
    return view('home');
});

Route::get('admin/home', function () {
    return view('admin.home');
});

Auth::routes();

//Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/city', [CityController::class, 'showCity'])->name('city.show');
Route::get('/city/create', [CityController::class, 'createCity'])->name('city.create');
Route::post('/city/create', [CityController::class, 'saveCity'])->name('city.store');
Route::get('/city/edit/{id}', [CityController::class, 'getCity'])->name('city.edit');
Route::put('/city/edit/{id}', [CityController::class, 'saveCity'])->name('city.update');
Route::get('/city/delete/{id}', [CityController::class, 'deleteCity'])->name('city.delete');


Route::get('/company', [CompanyController::class, 'showCompany'])->name('company.show');
Route::get('/company/create', [CompanyController::class, 'createCompany'])->name('company.create');
Route::post('/company/create', [CompanyController::class, 'saveCompany'])->name('company.store');
Route::get('/company/edit/{id}', [CompanyController::class, 'getCompany'])->name('company.edit');
Route::put('/company/edit/{id}', [CompanyController::class, 'saveCompany'])->name('company.update');
Route::get('/company/delete/{id}', [CompanyController::class, 'deleteCompany'])->name('company.delete');


Route::get('/job',[JobController::class,'showJob'])->name('job.show');
Route::get('/job/create',[JobController::class,'createJob'])->name('job.create');
Route::post('/job.create',[JobController::class,'saveJob'])->name('job.store');
Route::get('/job/edit/{id}',[JobController::class,'getJob'])->name('job.edit');
Route::put('/job/edit/{id}',[JobController::class,'saveJob'])->name('job.update');
Route::get('/job/delete/{id}',[JobController::class,'deleteJob'])->name('job.delete');


Route::get('/home',[UserHomePageController::class,'getCityJob'])->name('home');
//Route::get('/jobShow/{id}',[UserHomePageController::class,'getJob']);
//Route::get('/jobApply/{id}',[UserHomePageController::class,'ApplyJob']);

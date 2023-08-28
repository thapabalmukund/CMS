<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Frontend\HomeController;
use App\Http\Controllers\Frontend\AboutusController;
use App\Http\Controllers\Frontend\ClientsController;
use App\Http\Controllers\Frontend\ProjectsController;
use App\Http\Controllers\Frontend\ServicesController;
use App\Http\Controllers\Frontend\ContactusController;
use App\Http\Controllers\Backend\AdminController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
// */



//WEBSITE VIEW PAGES ROUTE & FUNCTION
Route::get('/', [HomeController::class, 'Display']);
Route::get('/about', [AboutusController::class, 'Display']);
Route::get('/service', [ServicesController::class, 'Display']);
Route::get('/contact', [ContactusController::class, 'index']);
Route::get('/project', [ProjectsController::class, 'Display']);
Route::get('/client', [ClientsController::class, 'Display']);



// CMS FrontendConrtoller Route


// Route::get('/admin', [HomeController::class, 'index'])->name('admin.index');
// Route::post('/admin/update/{id}', [HomeController::class, 'update'])->name('admin.update');
// Route::get('/admin/create', [HomeController::class, 'create'])->name('admin.create');
// Route::get('/admin/show', [HomeController::class, 'show'])->name('admin.show');
// Route::post('/admin/store', [HomeController::class, 'store'])->name('admin.store');
// Route::get('/admin/edit/{id}', [HomeController::class, 'edit'])->name('admin.edit');
// Route::delete('/admin/destory/{id}', [HomeController::class, 'destroy'])->name('admin.destroy');

Route::resource('admin', HomeController::class);
Route::resource('about', AboutUsController::class);
Route::resource('services', ServicesController::class);
Route::resource('projects', ProjectsController::class);
Route::resource('clients', ClientsController::class);
Route::resource('contact', ContactUsController::class);






Route::get('/', [AdminController::class, 'Change']);
Route::get('/about', [AdminController::class, 'Change1']);
Route::get('/client', [AdminController::class, 'Change']);
Route::get('/contact', [AdminController::class, 'Change']);
Route::get('/project', [AdminController::class, 'Change']);
Route::get('/service', [AdminController::class, 'Change']);









Route::get('/c', function () {
    return view('contentuploadwithfile');
});





Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/upload', function () {
    return view('welcome');
});

Route::post('/upload', [ContactusController::class, 'store']);

// Route::get('/', function () {
//     return view('welcome');
// });
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\BookingTourController;
use Illuminate\Support\Facades\Auth;
use App\Http\Middleware;

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

Route::prefix('/admin')->middleware('isAdmin')->group(function(){
    // Admin - get View
    Route::get('/', [AdminController::class, 'index'])->name('adminView');
    Route::get('/user', [AdminController::class, 'user'])->name('adminUser');
    Route::get('/ticket', [AdminController::class, 'ticket'])->name('adminTicket');
    Route::get('/tour', [AdminController::class, 'tour'])->name('adminTour');
    Route::get('/blog', [AdminController::class, 'blog'])->name('adminBlog');
    // Admin - add
    Route::post('/addUser', [AdminController::class, 'addUser'])->name('addUser');
    Route::post('/addTour', [AdminController::class, 'addTour'])->name('addTour');
    Route::post('/addTicket', [AdminController::class, 'addTicket'])->name('addTicket');
    Route::post('/addBlog', [AdminController::class, 'addBlog'])->name('addBlog');
    // Admin - delete
    Route::post('/deleteTour', [AdminController::class, 'deleteTour'])->name('deleteTour');
    Route::post('/deleteTicket', [AdminController::class, 'deleteTicket'])->name('deleteTicket');
    Route::post('/deleteBlog', [AdminController::class, 'deleteBlog'])->name('deleteBlog');
    Route::post('/deleteUser', [AdminController::class, 'deleteUser'])->name('deleteUser');
    // Admin - edit
    Route::post('/updateTour', [AdminController::class, 'updateTour'])->name('updateTour');
    Route::post('/updateBlog', [AdminController::class, 'updateBlog'])->name('updateBlog');
    Route::post('/updateTicket', [AdminController::class, 'updateTicket'])->name('updateTicket');
    Route::post('/updateUser', [AdminController::class, 'updateUser'])->name('updateUser');
    // Admin - contact
    Route::get('/contact', [AdminController::class, 'contact'])->name('adminContact');
    Route::post('/contact', [AdminController::class, 'deletecontact']);
});

//Contact-view
Route::get('/contact', [UserController::class, 'showPagecontact']);
Route::post('/contact', [UserController::class, 'storePagecontact']);


Route::get('/home', [UserController::class, 'showPagehome']);
Route::get('/offers', [UserController::class, 'showPageoffers']);
// Search offers
Route::post('/offers_search', [UserController::class, 'search']);
Route::post('/offers_search/BookingForm/store/{id}', [UserController::class, 'storeSearch'])->name('BookingForm.storeSearch');

Route::get('/news', [UserController::class, 'showPagenews']);
Route::get('/about-us', [UserController::class, 'showPageaboutus']);
// Route::get('/sign_in', [UserController::class, 'showPagesignin']);
// Route::get('/sign_up', [UserController::class, 'showPagesignup']);

Route::post('/offers/BookingForm/store/{id}', [BookingTourController::class, 'store'])->name('BookingForm.store');

// Logout
Route::get('logout', [UserController::class, 'logout'])->name('logout');

Route::get('/login', [UserController::class, 'login']);
Route::get('register', [UserController::class, 'register']);
Route::post('/register-user', [UserController::class, 'registerUser'])->name('register-user');
Route::post('/login-user', [UserController::class, 'loginUser'])->name('login-user');


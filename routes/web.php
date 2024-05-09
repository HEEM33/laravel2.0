<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/details/{universities_id}', [App\Http\Controllers\DetailsController::class, 'show'])->name('details');
Route::post('/universities/{universities_id}/rate', [App\Http\Controllers\RatingController::class, 'rate'])->name('universities.rate');
Route::post('/universities/{universities_id}/comments', [App\Http\Controllers\CommentController::class, 'comments'])->name('universities.comments');
Route::get('/universities/{universities_id}/ranking', [App\Http\Controllers\RankingController::class, 'ranking'])->name('classement');
Route::get('/history', [App\Http\Controllers\UserController::class, 'history'])->name('user.history');
//
Route::get('/users/manage', [App\Http\Controllers\UserController::class, 'index'])->name('admin.users.index');
Route::get('/edit-users/{user_id}', [App\Http\Controllers\UserController::class, 'edit'])->name('pages.profil');
Route::put('/update-users/{user_id}', [App\Http\Controllers\UserController::class, 'update']);
Route::get('/delete-users/{user_id}', [App\Http\Controllers\UserController::class, 'destroy']);

Route::prefix('admin')->middleware(['auth'])->group(function () {

    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);
    
    Route::get('/universities', [App\Http\Controllers\Admin\UniversitiesController::class, 'index']);
    Route::get('/add-universities', [App\Http\Controllers\Admin\UniversitiesController::class, 'create']);
    Route::post('/add-universities', [App\Http\Controllers\Admin\UniversitiesController::class, 'store']);
    Route::get('/edit-universities/{universities_id}', [App\Http\Controllers\Admin\UniversitiesController::class, 'edit']);
    Route::put('/update-universities/{universities_id}', [App\Http\Controllers\Admin\UniversitiesController::class, 'update']);
    Route::get('/delete-universities/{universities_id}', [App\Http\Controllers\Admin\UniversitiesController::class, 'destroy']);
    //
    Route::get('/comments', [App\Http\Controllers\CommentController::class, 'index'])->name('admin.comments.index');
    Route::get('/comments/{comment_id}', [App\Http\Controllers\CommentController::class, 'show']);
    Route::get('/delete-comments/{comment_id}', [App\Http\Controllers\CommentController::class, 'destroy']);
    

});
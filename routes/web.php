<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home.welcome');
});
Route::get('/transaction', [App\Http\Controllers\TestControllerTransaction::class, 'index']);



Route::get('/categories/{id}', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/applications', [App\Http\Controllers\TestController::class, 'applications']);
Route::get('/tenders', [App\Http\Controllers\TestController::class, 'tenders']);
Route::get('/customers', [App\Http\Controllers\TestController::class, 'customers']);

Route::get('/db/customers', [App\Http\Controllers\TestBbController::class, 'customers']);

Route::get('/blog', [App\Http\Controllers\BlogController::class, 'getBlog']);

Route::get('/blog/{categoryId}', [App\Http\Controllers\BlogCategoryController::class, 'getCategories']);


Route::get('/blog/{categoryId}/{postId}', [App\Http\Controllers\BlogPostController::class, 'getPosts']);





Route::get('/blog/addCategory', [App\Http\Controllers\BlogCategoryController::class, 'addCategory']);
Route::get('/blog/updatePost', [App\Http\Controllers\BlogPostController::class, 'updatePost']);
Route::get('/blog/deleteComment', [App\Http\Controllers\BlogCommentController::class, 'deleteComment']);

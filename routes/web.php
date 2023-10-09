<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// home
//Route::get('/', [ArticleController::class,'index']);

Route::get("/articles", [ArticleController::class,'index']);


Route::post('/comments/add', [
        CommentController::class,
        'create']
);

Route::get('/comments/delete/{id}', [
    CommentController::class,
    'delete'
]);

// dynamic route
Route::get("/articles/detail/{id}", [ArticleController::class,'detail']);


Route::get("/articles/add", [ArticleController::class,'add']);


Route::post("/articles/add", [ArticleController::class,'create']);

Route::get("/articles/delete/{id}", [ArticleController::class,'delete']);


Auth::routes();

Route::get('/', [HomeController::class, 'index']);
//


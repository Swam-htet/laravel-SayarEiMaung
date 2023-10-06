<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;

// home
Route::get('/', [ArticleController::class,'index']);

Route::get("/articles", [ArticleController::class,'index']);


//Route::get("/articles/detail", function () {
//    return "Testing articles detail Route";
//})->name("article.detail");

// dynamic route
Route::get("/articles/detail/{id}", [ArticleController::class,'detail']);


Route::get("/articles/add", [ArticleController::class,'add']);


Route::post("/articles/add", [ArticleController::class,'create']);

Route::get("/articles/delete/{id}", [ArticleController::class,'delete']);


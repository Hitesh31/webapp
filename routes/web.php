<?php

use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentsController;
use Illuminate\Support\Facades\Route;
Route::post('/users/create',[UserController::class,'createUser']);
Route::post('/users/{user}/post',[PostController::class,'postUser']);
Route::post('/users/{user}/post/{post}',[CommentsController::class,'Comment']);
Route::get('/users/{user}/post',[UserController::class,'fetchPosts']);
Route::get('/users/post/{post}',[PostController::class,'fetchComments']);

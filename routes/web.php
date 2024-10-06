<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

Route::get('/', function () {
    return view('welcome');
});

// 新規投稿フォームを表示（GETリクエスト）
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// 新規登録を保存　（POSTリクエスト）
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');
// 投稿一覧を表示
Route::get('/posts', [PostController::class, 'index']);

// 新規投稿フォームを表示
Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');

// 新規投稿を保存
Route::post('/posts/store', [PostController::class, 'store'])->name('posts.store');

// 投稿詳細を表示
Route::get('/posts/{id}', [PostController::class, 'show']);

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // クエリビルダを使用するために追加

class PostController extends Controller {
    public function index() {
        // postsテーブルから全ての投稿データを取得
        $posts = DB::table('posts')->get();

        

        // ビューにデータを渡す
        return view('post.index',compact('posts'));
    }
}
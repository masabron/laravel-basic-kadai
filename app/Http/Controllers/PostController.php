<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB; // クエリビルダを使用するために追加
use App\Models\Post;

class PostController extends Controller {
    public function index() {
        // postsテーブルから全ての投稿データを取得
        $posts = DB::table('posts')->get();

        

        // ビューにデータを渡す
        return view('post.index',compact('posts'));
    }
    public function show($id) {
        // URL'/posts/{id}'の'{id}'部分と主キー（idカラム）の値が一致するデータをpostsテーブルから取得し、変数$postに代入する
        $post = Post::find($id);

        // 変数$productをproducts/show.blade.phpファイルに渡す
        return view('post.show', compact('post'));
    }
}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller {
    public function index() {
        $posts = Post::all();
        return view('post.index', compact('posts'));
    }

    public function show($id) {
        $post = Post::find($id);
        return view('post.show', compact('post'));
    }

    // 新規投稿のフォームを表示するアクション
    public function create() {
        return view('post.create');
    }

    // 新規投稿を保存するアクション
    public function store(Request $request) {
        // バリデーション処理
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        // データベースに新規投稿を保存
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // 投稿一覧ページにリダイレクト
        return redirect('/posts')->with('success', '投稿が保存されました！');
    }
}


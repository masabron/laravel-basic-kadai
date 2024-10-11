<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    // 投稿一覧を表示する
    public function index() {
        $posts = Post::all();
        return view('posts.index', compact('posts'));
    }

    // 投稿詳細を表示する
    public function show($id) {
        $post = Post::findOrFail($id);
        return view('posts.show', compact('post'));
    }

    // 新規投稿フォームを表示する
    public function create() {
        return view('posts.create');
    }

    // 新規投稿を保存する
    public function store(Request $request) {
        // バリデーション
        $request->validate([
            'title' => 'required|max:20',
            'content' => 'required|max:200',
        ]);

        // 新しい投稿をデータベースに保存
        Post::create([
            'title' => $request->input('title'),
            'content' => $request->input('content'),
        ]);

        // 投稿一覧ページへリダイレクト
        return redirect()->route('posts.index')->with('success', '投稿が保存されました！');
    }
}

<!-- resources/views/post/create.blade.php -->

@extends('layouts.app')

@section('content')
    <h1>新規投稿</h1>

    <!-- バリデーションエラーがあれば表示 -->
    @if ($errors->any())
        <div>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" maxlength="20">
        </div>
        <div>
            <label for="content">本文:</label>
            <textarea name="content" id="content" maxlength="200">{{ old('content') }}</textarea>
        </div>
        <button type="submit">投稿する</button>
    </form>
@endsection


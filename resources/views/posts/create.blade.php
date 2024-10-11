<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規投稿</title>
</head>
<body>
    <h1>新規投稿</h1>
    
    <!-- 投稿フォーム -->
    <form action="{{ route('posts.store') }}" method="POST">
        @csrf
        <div>
            <label for="title">タイトル:</label>
            <input type="text" name="title" id="title" value="{{ old('title') }}" required>
        </div>
        <div>
            <label for="content">内容:</label>
            <textarea name="content" id="content" required>{{ old('content') }}</textarea>
        </div>
        <button type="submit">投稿する</button>
    </form>

    <!-- バリデーションエラーメッセージの表示 -->
    @if ($errors->any())
        <div>
            <h2>エラーメッセージ:</h2>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
</body>
</html>

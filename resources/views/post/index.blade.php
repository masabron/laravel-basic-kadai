<!DOCTYPE html>
<html>
<head>
    <title>Posts</title>
</head>
<body>
    <h1>投稿一覧</h1>

    <ul>
        @foreach ($posts as $post)
            <li>
                
                <tr>{{ $post->title }}</tr>
                <td>{{ $post->content }}</td>
            </li>
        @endforeach
    </ul>
</body>
</html>

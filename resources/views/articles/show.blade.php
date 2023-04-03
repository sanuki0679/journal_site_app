<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>article show</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>論文詳細</h1>
    <p>
        <h2><b>タイトル：{{ $article->title }}</b></h2>
    </p>

    <p>
        <b>{{ $article->body }}</b>
    </p>

    <div class="button-group">
        <!-- 商品のidを元に編集ページへ遷移する -->
        <button onclick="location.href='/articles'">一覧へ戻る</button>
        <button onclick="location.href='/articles/{{ $article->id }}/edit'">編集する</button>
        <form action="/articles/{{ $article->id }}" method="post">
            @csrf
            @method('DELETE')
            <input type="submit" value="削除する" onclick="if(!confirm('削除しますか？')){return false};">
        </form>
    </div>
    
</body>
</html>

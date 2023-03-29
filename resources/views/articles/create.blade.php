<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>auction create</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <h1>新規論文投稿</h1>
    <form action="/items" method="post">
        @csrf
        <p>
            <label for="title">タイトル</label>
            <input type="text" name="title">
        </p>
        <p>
            <label for="body"></label>
            <input type="text" name="body">
        </p>
        
        <input type="submit" value="投稿">
    </form>
</body>
</html>

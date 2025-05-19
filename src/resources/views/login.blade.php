<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JunkMemo - ログイン -</title>
</head>

<body>
    <h1>ログイン</h1>
    <div class="form">
        <div class="form__item">
            <label for="id">ID</label>
            <input name="id" type="text" placeholder="メールアドレス" />
        </div>
        <div class="form__item">
            <label for="password">パスワード</label>
            <input name="password" type="text" placeholder="パスワード" />
        </div>
        <a hidden>パスワードをお忘れですか？</a>
        <div class="form__button">
            <button>ログインする</button>
            <button>新規登録</button>
        </div>
    </div>
</body>

</html>
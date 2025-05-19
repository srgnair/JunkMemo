<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8" />
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>JunkMemo - 新規登録 -</title>
</head>

<body>
    <h1>新規登録</h1>
    <div class="form">
        <div class="form__item">
            <input type="text" placeholder="ニックネーム" />
        </div>
        <div class="form__item">
            <input type="email" placeholder="メールアドレス" />
        </div>
        <div class="form__item">
            <input type="password" placeholder="パスワード" />
        </div>
        <div class="form__button">
            <button>登録</button>
        </div>
    </div>
    <p hidden>---------- or ----------</p>
    <button hidden>Signin with Google</button>
    <button hidden>Signin with Apple</button>
</body>

</html>
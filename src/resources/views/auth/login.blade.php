<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>ログイン</title>
    <style>
        .error { color: red; font-size: 14px; }
    </style>
</head>
<body>
    <h1>ログイン</h1>

    {{-- 認証失敗メッセージ --}}
    @if ($errors->has('login'))
        <div class="error">{{ $errors->first('login') }}</div>
    @endif

    <form method="POST" action="{{ route('login') }}">
        @csrf

        <div>
            <label for="email">メールアドレス</label><br>
            <input id="email" type="email" name="email" value="{{ old('email') }}">
            @error('email')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <label for="password">パスワード</label><br>
            <input id="password" type="password" name="password">
            @error('password')
                <div class="error">{{ $message }}</div>
            @enderror
        </div>

        <div>
            <button type="submit">ログイン</button>
        </div>
    </form>
</body>
</html>
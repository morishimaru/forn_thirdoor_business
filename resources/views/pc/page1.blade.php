@extends('layouts.pc')

@section('content')
    <div class="login">
        <div class="content">
            <div class="title">クライアントログイン</div>
            <img class="logo" src="{{ asset('img/logo.png') }}" alt="3rdoor" />
            <div class="ver">VER 1.0.0</div>

            <form>
                <input type="text" class="form-control mb-3" placeholder="メールアドレスを入力してください" />
                <input type="password" class="form-control" placeholder="パスワードを入力してください" />
                <button type="submit" class="btn btn-dark btn-lg">ログイン</button>
            </form>

            <p><a href="#">パスワードをお忘れの方はこちら</a></p>
            <a href="#">新規会員登録はこちら</a>
        </div>
    </div>
@endsection

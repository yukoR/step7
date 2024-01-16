@extends('layouts.app')

@section('title','ユーザー新規登録画面')

@section('content')

        <div class="container">
            <div><h1>ユーザー新規登録画面</h1></div>
            <div class="form">
                <form action="" method="post">
                    <div>
                        <label for="password"><input type="password" name="password" id="password" placeholder="パスワード"></label>
                    </div>
                    <div>
                        <label for="address"><input type="address" name="address" id="address" placeholder="アドレス"></label>
                    </div>
                    <div class="button">
                        <button type="submit" id="registBtn">新規登録</button>
                        <button type="button" id="backBtn">戻る</button>
                    </div>
                                    
                
                </form>
            </div>
        </div>

@endsection
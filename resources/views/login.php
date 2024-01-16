@extends('layouts.app')

@section('title','ログイン画面')

@section('content')

        <div class="container">
            <div><h1>ログイン画面・編集してみた</h1></div>
            <div>
                
            <form action="#" method="post">
                @csrf
                
                <div class="form_group">
                    <label for="password"><input type="password" name="password" id="password" placeholder="パスワード"></label>
                </div>
                <div class="form_group">
                    <label for="emailAddress"><input type="text" name="emailAddress" id="emailAddress" placeholder="アドレス"></label>
                </div>
                <div class="form_group">
                    <button type="button" id="toSignUpBtn">新規登録はこちら</button>
                    <button type="button" id="backBtn">ログイン</button>
                </div>
                                
            
            </form>
        </div>
    </div>  
    <script src="step7.js"></script>
    
@endsection

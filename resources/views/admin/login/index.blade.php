@extends('layouts.bootstrap.base')

@section('title', 'Login')

@section('content')
    <div class="container">
        <form class="login-block">
            <div class="form-group">
                <label for="email">登录邮箱</label>
                <input type="email" class="form-control" id="email" placeholder="输入一个有效的邮箱地址">
            </div>
            <div class="form-group">
                <label for="password">密码</label>
                <input type="password" class="form-control" id="password" placeholder="密码">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox"> 保持登录
                </label>
            </div>
            <button type="button" class="btn btn-default" id="login" data-ajax-url="{{action('Admin\LoginController@postAuth')}}">立即登录</button>
        </form>
    </div>
@stop

@section('footer-js')
    <script src="{{ asset('dist/js/login.js') }}" type="text/javascript"></script>
@stop

@extends('layouts.app')

@section('content')
    <div class="col-md-10">
        <div class="panel panel-default">
            <div class="panel-body">
                <form class="form-horizontal">
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Name</label>
                        <div class="col-sm-10">
                            {{ $user->name }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Email</label>
                        <div class="col-sm-10">
                            {{ $user->email }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">密码</label>
                        <div class="col-sm-10">
                            {{ $user->password }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">Token</label>
                        <div class="col-sm-10">
                            {{ $user->remember_token }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">注册时间</label>
                        <div class="col-sm-10">
                            {{ $user->created_at }}
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">最后一次登录时间</label>
                        <div class="col-sm-10">
                            {{ $user->updated_at }}
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

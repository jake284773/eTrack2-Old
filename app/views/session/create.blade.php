@extends('template.base')

@section('main')

<div class="col-sm-6 col-sm-offset-3 col-md-4 col-md-offset-4">
    <div id="login-box" class="panel panel-default">
        <div class="panel-heading"><h2>Login</h2></div>
        <div class="panel-body">
            {{ Form::open(array('route' => 'session.store')) }}

            @if (Session::get('error'))
                <div class="alert alert-danger">
                    <span class="glyphicon glyphicon-warning-sign"></span>
                    {{ Session::get('error') }}
                </div>
            @endif

            @if (Session::get('message'))
                <div class="alert alert-info">
                    <span class="glyphicon glyphicon-info-sign"></span>
                    {{ Session::get('message') }}
                </div>
            @endif

            <div class="form-group">
                {{ Form::label('user_id', 'User ID:') }}
                {{ Form::text('user_id', null, array('class' => 'form-control', 'autofocus')) }}
            </div>

            <div class="form-group">
                {{ Form::label('password', 'Password:') }}
                {{ Form::password('password', array('class' => 'form-control')) }}
            </div>

            {{ Form::button('Login', array('type' => 'submit', 'class' => 'btn btn-primary btn-lg')) }}

            {{ Form::close() }}
        </div>
    </div>
</div>

@stop

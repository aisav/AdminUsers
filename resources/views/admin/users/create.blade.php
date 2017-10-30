@extends('layouts.admin')

@section('content')

    <h1>Create User</h1>
    {{--<form action="AdminUserController@store" method="get" target="_blank">--}}
    {!! Form::open(['method'=>'POST','action'=>'AdminUsersController@store']) !!}
    <div class="form-group">
        {!! Form::label('name', 'Name') !!}
        {!! Form::text('name', null,
            ['class'=>'form-control', 'placeholder'=>'Name']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('email', 'Email') !!}
        {!! Form::text('email', null,
            ['class'=>'form-control', 'placeholder'=>'Email']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('role_id', 'Role') !!}
        {!! Form::select('role_id',[''=>'Chose Options'] + $roles, null, ['class'=>'form-control']) !!}
    </div>

    <div class="form-group">
        {!! Form::label('status', 'Status') !!}
        {!! Form::text('status', null,
            ['class'=>'form-control', 'placeholder'=>'Status']) !!}
    </div>

    <div class="form-group">
        {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
    </div>
    {!! Form::close() !!}
    {{--</form>--}}
@endsection
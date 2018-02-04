@extends('layouts.app')

@section('content')

    <h1>やること登録</h1>
    
    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
        {!! Form::label('content', 'やること') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('登録') !!}
    {!! Form::close() !!}
    

@endsection
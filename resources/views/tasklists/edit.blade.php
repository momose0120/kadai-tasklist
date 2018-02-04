@extends('layouts.app')

@section('content')

    <h1>やること編集</h1>
    
    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
        {!! Form::label('content', 'やること') !!}
        {!! Form::text('content') !!}
        {!! Form::submit('編集') !!}
    {!! Form::close() !!}
    

@endsection
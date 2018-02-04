@extends('layouts.app')

@section('content')

    <h1>やること編集</h1>
    
    {!! Form::model($tasklist, ['route' => ['tasklists.update', $tasklist->id], 'method' => 'put']) !!}
        {!! Form::label('content', 'やること') !!}
        {!! Form::text('content') !!}
        {!! Form::label('status', '状況') !!}
        {!! Form::select('status', ['未着手' => '未着手', '着手' => '着手', '完了' => '完了']) !!}

        {!! Form::submit('編集') !!}
    {!! Form::close() !!}
    

@endsection
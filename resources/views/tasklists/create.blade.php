@extends('layouts.app')

@section('content')

    <h1>やること登録</h1>
    
    {!! Form::model($tasklist, ['route' => 'tasklists.store']) !!}
        {!! Form::label('content', 'やること') !!}
        {!! Form::text('content') !!}
        {!! Form::label('status', '状況') !!}
        {!! Form::select('status', ['未着手' => '未着手', '着手' => '着手', '完了' => '完了']) !!}
        {!! Form::submit('登録') !!}
    {!! Form::close() !!}
    

@endsection
@extends('layouts.app')

@section('content')

    <h1>やることリスト詳細</h1>
    
    <p>id : {{ $tasklist->id }}のやることリスト</p>
    <p>やること：　{{ $tasklist->content }}</p>
    <p>状況：　{{ $tasklist->status }}</p>

    
    {!! link_to_route('tasklists.edit', 'やること編集', ['id' => $tasklist->id]) !!}
    
    {!! Form::model($tasklist, ['route' => ['tasklists.destroy', 'id' => $tasklist->id], 'method' => 'delete']) !!}

        {!! Form::submit('削除') !!}
        
    {!! Form::close() !!}
    
@endsection
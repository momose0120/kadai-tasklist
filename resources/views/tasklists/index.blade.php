@extends('layouts.app')

@section('content')

    <h1>タスク一覧：やることリスト</h1>
    
    @if (count($tasklists) > 0)
         <ul>
             @foreach ($tasklists as $tasklist)
                 <li>{!! link_to_route('tasklists.show', $tasklist->id, ['id' => $tasklist->id]) !!} : {{ $tasklist->content }} : 状況　{{ $tasklist->status }}</li>
             @endforeach
         </ul>
     @endif
     
     {!! link_to_route('tasklists.create', 'やることの登録') !!}

@endsection
@extends('layouts.app')

@section('content')

    <h1>タスクリスト</h1>

 
             @foreach ($tasks as $task)
                <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->content }}</li>
            @endforeach
            {!! link_to_route('tasks.create', '新規タスクの投稿') !!}
@endsection
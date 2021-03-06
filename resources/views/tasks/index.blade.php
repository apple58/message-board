@extends('layouts.app')

@section('content')

    <h1>タスクリスト </h1>

    @if (count($tasks) > 0)
        <ul>
            @foreach ($tasks as $task)
                <li>{{ $task->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('tasks.create', '新規タスクの追加') !!}

@endsection
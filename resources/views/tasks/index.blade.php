@extends('layouts.app')

@section('content')
            <h1>Task一覧</h1>

        @if (count($tasks) > 0)
    <ul>
        @foreach ($tasks as $task)
        
        <li>{!! link_to_route('tasks.show', $task->id, ['id' => $task->id]) !!} : {{ $task->status }} >{{ $task->content }}</li>
        
    @endforeach
    </ul>

    @endif
    
{!! link_to_route('tasks.create', 'To-Do Listの作成') !!}

@endsection
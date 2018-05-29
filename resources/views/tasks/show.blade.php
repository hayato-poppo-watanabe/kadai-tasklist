@extends('layouts.app')
@section('content')

    <h1>id = {{ $task->id }} のTask詳細ページ</h1>

        <p>{{ $task->content }}</p>
        {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id]) !!}
   
   {!! Form::model($message, ['route' => ['messages.destroy', $message->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
        {!! Form::close() !!}
        
    @endsection
@extends('layouts.app')

@section('content')

    <h1>id = {{ $task->id }} のTask詳細ページ</h1>

    <div class="row">
    <div class="col-xs-6">
       <table class="table table-bordered">
    <tr>
        <th>id</th>
            <td>{{ $task->id }}</td>
    </tr>
    
    <tr>
        <th>ステータス</th>
            <td>{{ $task->status }}</td>
    </tr>
    
    <tr>
        <th>コメント欄</th>
            <td>{{ $task->content }}</td>
    </tr>
</table>

</div>
</div>
        
        {!! link_to_route('tasks.edit', 'このメッセージを編集', ['id' => $task->id], ['class' => 'btn btn-default']) !!}
   
   {!! Form::model($task, ['route' => ['tasks.destroy', $task->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
        {!! Form::close() !!}
        
    @endsection
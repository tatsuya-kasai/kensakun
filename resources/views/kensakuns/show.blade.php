@extends('layouts.app')

@section('content')

    <h1>居室番号 = {{ $kensakun->id }} 号室の入居者詳細ページ</h1>

    <table class="table table-bordered">
        <tr>
            <th>居室番号</th>
            <td>{{ $kensakun->id }}</td>
        </tr>
        <tr>
            <th>性別</th>
            <td>{{ $kensakun->sex }}</td>
        </tr>
        <tr>
            <th>氏名</th>
            <td>{{ $kensakun->content }}</td>
        </tr>
        <tr>
            <th>生年月日</th>
            <td>{{ $kensakun->birth }}</td>
        </tr>
        <tr>
            <th>年齢</th>
            <td>{{ $kensakun->age }}</td>
        </tr>
        <tr>
            <th>趣味</th>
            <td>{{ $kensakun->hobby }}</td>
        </tr>
    </table>
    
     {!! link_to_route('kensakuns.edit', 'この入居者情報を編集', ['id' => $kensakun->id], ['class' => 'btn btn-default']) !!}
     
     {!! Form::model($kensakun, ['route' => ['kensakuns.destroy', $kensakun->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除', ['class' => 'btn btn-danger']) !!}
    {!! Form::close() !!}

@endsection
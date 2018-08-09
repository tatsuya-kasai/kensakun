@extends('layouts.app')

@section('content')

    <h1>居室番号 = {{ $kensakun->id }} の入居者詳細ページ</h1>

    <p>{{ $kensakun->content }}</p>
    
     {!! link_to_route('kensakuns.edit', 'この入居者情報を編集', ['id' => $kensakun->id]) !!}
     
     {!! Form::model($kensakun, ['route' => ['kensakuns.destroy', $kensakun->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}

@endsection
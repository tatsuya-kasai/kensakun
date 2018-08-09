@extends('layouts.app')

@section('content')

    <h1>id: {{ $kensakun->id }} の入居者情報編集ページ</h1>

    {!! Form::model($kensakun, ['route' => ['kensakuns.update', $kensakun->id], 'method' => 'put']) !!}

        {!! Form::label('content', 'メッセージ:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}

@endsection
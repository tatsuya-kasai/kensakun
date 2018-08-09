@extends('layouts.app')

@section('content')

    <h1>入居者新規作成ページ</h1>

    {!! Form::model($kensakun, ['route' => 'kensakuns.store']) !!}

        {!! Form::label('content', '名前:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('投稿') !!}

    {!! Form::close() !!}

@endsection
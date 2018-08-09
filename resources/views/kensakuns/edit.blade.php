@extends('layouts.app')

@section('content')

    <h1>居室番号: {{ $kensakun->id }} 号室の入居者情報編集ページ</h1>

    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($kensakun, ['route' => ['kensakuns.update', $kensakun->id], 'method' => 'put']) !!}

            <div class="form-group">
                {!! Form::label('sex', '性別:') !!}
                {!! Form::text('sex', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', '氏名:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('birth', '生年月日:') !!}
                {!! Form::text('birth', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('age', '年齢:') !!}
                {!! Form::text('age', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('hobby', '趣味:') !!}
                {!! Form::text('hobby', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('登録', ['class' => 'btn btn-primary']) !!}

        {!! Form::close() !!}

@endsection
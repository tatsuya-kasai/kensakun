@extends('layouts.app')

@section('content')

    <h1>居室番号: {{ $kensakun->room }} 号室情報を編集する</h1>

    <div class="row">
        <div class="col-xs-6">
            {!! Form::model($kensakun, ['route' => ['kensakuns.update', $kensakun->id], 'method' => 'put']) !!}
　　　　　　
            <div class="form-group">
                {!! Form::label('room', '居室番号:') !!}
                {!! Form::text('room', null, ['class' => 'form-control']) !!}
            </div>
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
            <div class="form-group">
                {!! Form::label('adl', 'ADL:') !!}
                {!! Form::text('adl', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('登録', ['class' => 'btn btn-primary btn-lg']) !!}

        {!! Form::close() !!}

@endsection
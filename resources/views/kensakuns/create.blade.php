@extends('layouts.app')

@section('content')

    <h1>入居者新規作成ページ</h1>

<div class="row">
        <div class="col-xs-6">
            {!! Form::model($kensakun, ['route' => 'kensakuns.store']) !!}

            <div class="form-group">
                {!! Form::label('sex', '性別:') !!}
                {!! Form::text('sex', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', '氏名:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('birth', '生年月日: 記入例(1944_10_09)') !!}
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
    </div>
</div>
@endsection


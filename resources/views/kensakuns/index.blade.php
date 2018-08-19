@extends('layouts.app')

@section('content')

    <h1>入居者一覧</h1>
    
    <img src="{{ secure_asset("images/logo2.png") }}"
    <h1><u>入居者の詳細は居室番号をクリック！！</u></h1>
    @if (count($kensakuns) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th><h4>居室番号</h4></th>
                    <th><h3>性別</h3></th>
                    <th><h3>氏名</h3></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kensakuns as $kensakun)
                    <tr>
                        <td>{!! link_to_route('kensakuns.show', $kensakun->room, ['id' => $kensakun->id]) !!}</td>
                        <td>{{ $kensakun->sex }}</td>
                        <td>{{ $kensakun->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('kensakuns.create', '新規入居者情報の登録', null, ['class' => 'btn btn-success btn-lg']) !!}

@endsection
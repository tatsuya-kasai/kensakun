@extends('layouts.app')

@section('content')

    <h1>入居者一覧</h1>
    <img src="{{ secure_asset("images/logo2.png") }}"
    <h2><u>詳細はID番号をクリック！！</u></h2>
    @if (count($kensakuns) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>居室番号</th>
                    <th>性別</th>
                    <th>氏名</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kensakuns as $kensakun)
                    <tr>
                        <td>{!! link_to_route('kensakuns.show', $kensakun->id, ['id' => $kensakun->id]) !!}</td>
                        <td>{{ $kensakun->room }}</td>
                        <td>{{ $kensakun->sex }}</td>
                        <td>{{ $kensakun->content }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('kensakuns.create', '新規入居者情報の登録', null, ['class' => 'btn btn-success btn-lg']) !!}

@endsection
@extends('layouts.app')

@section('content')

    <h1>入居者一覧</h1>
    <h2>詳細は居室番号をクリック！！</h2>
    @if (count($kensakuns) > 0)
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>居室番号</th>
                    <th>性別</th>
                    <th>氏名</th>
                    <th>生年月日</th>
                    <th>年齢</th>
                    <th>趣味</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($kensakuns as $kensakun)
                    <tr>
                        <td>{!! link_to_route('kensakuns.show', $kensakun->id, ['id' => $kensakun->id]) !!}</td>
                        <td>{{ $kensakun->sex }}</td>
                        <td>{{ $kensakun->content }}</td>
                        <td>{{ $kensakun->birth }}</td>
                        <td>{{ $kensakun->age }}</td>
                        <td>{{ $kensakun->hobby }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @endif
    
    {!! link_to_route('kensakuns.create', '新規入居者情報の登録', null, ['class' => 'btn btn-primary']) !!}

@endsection
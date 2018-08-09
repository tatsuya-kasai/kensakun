@extends('layouts.app')

@section('content')

    <h1>入居者一覧</h1>
    @if (count($kensakuns) > 0)
        <ul>
            @foreach ($kensakuns as $kensakun)
                <li>{!! link_to_route('kensakuns.show', $kensakun->id, ['id' => $kensakun->id]) !!} : {{ $kensakun->content }}</li>
            @endforeach
        </ul>
    @endif
    
    {!! link_to_route('kensakuns.create', '新規入居者情報の登録') !!}

@endsection
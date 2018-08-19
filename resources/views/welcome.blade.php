@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>-けんさくん-</h1>
                <h3>入居者情報をいっぱつキャッチ！！</h3>
                {!! link_to_route('login', '☆ログインしましょう☆', null, ['class' => 'btn btn-lg btn-success btn-lg btn-block']) !!}
            </div>
        </div>
    @endif
@endsection
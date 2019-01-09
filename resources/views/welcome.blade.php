@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        {{ $user->name }}
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>地方公務員法　学習サイト</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
            <div class="text-left">
                <h2>＜内容＞</h2>
                <h3>1  地方公務員法を項目別に学習できるサイトです</h3>
                <h3>2  内容は左上にある目次で確認できます</h3>
                <h3>3  メールアドレスをご登録ください</h3>
            </div>
        </div>
    @endif
@endsection

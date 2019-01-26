@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="center jumbotron">
            <div class="text-center">
                <h4>クイズ一覧</h4>
            </div>
            <div class="text-left">
                 @if (count($notebooks) > 0)
                    <ul>
                        @foreach ($notebooks as $notebook)
                            <li> {{ $notebook->display_number }}:{!! link_to_route('notebooks.show', $notebook->title, ['id' => $notebook->id]) !!}</li>
                        @endforeach
                    </ul>
                @endif
            </div>
        </div>
        
    @else
        <div class="center jumbotron">
            <div class="text-center">
                <h1>地方公務員法　学習サイト</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
            <div class="text-left">
                <h2>＜内容＞</h2>
                <h3>1  地方公務員法を項目別に学習できるサイトです</h3>
                <h3>2  メールアドレスをご登録ください</h3>
            </div>
        </div>
    @endif
@endsection

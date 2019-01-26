@extends('layouts.app')

@section('content')

    <h1>目次一覧</h1>

    @if (count($notebooks) > 0)
        <ul>
            @foreach ($notebooks as $notebook)
                <li>{{ $notebook->content }}</li>
            @endforeach
        </ul>
    @endif

@endsection
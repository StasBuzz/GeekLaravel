@extends('layouts/main')

@section('content')
<div>
        <strong>{{ $newsItem['title'] }}</strong>
        <p>{{ $newsItem['description'] }}</p>
        <em>Автор: {{ $newsItem['author'] }}</em>
        <hr>
</div>
@endsection
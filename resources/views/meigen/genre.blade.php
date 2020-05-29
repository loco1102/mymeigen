@extends('layouts.main')

@section('page', '検索')

@section('title', '検索')

@section('content')
            <div class="container2">
                <div class="genre-navigation">
                    <ul>
                        <li><a href="/meigen/genre">ジャンル</a></li>
                        <li><a href="/meigen/name">名前順</a></li>
                        <li><a href="/meigen/man">男性</a></li>
                        <li><a href="/meigen/woman">女性</a></li>
                    </ul>
                </div>
                <h3>ジャンル</h3>
                @foreach( $genre_data as $genre)
                    <div class="child">
                        <img width="170" height="120" src="{{ $genre->genre_photo }}" alt="ジャンル画像">
                        <h3 class="title"><a href="{{ url('meigen/genre/detail', $genre->id) }}">{{ $genre->genre_name }}</a></h3>
                    </div>
                @endforeach
            </div>
@endsection
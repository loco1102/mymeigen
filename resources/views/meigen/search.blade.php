@extends('layouts.main')

@section('page', '検索')

@section('title', '検索')

@section('content')
            <div class="container2">
                <div class="genre-navigation">
                    <ul>
                        <li><a href="genre">ジャンル</a></li>
                        <li><a href="name">名前順</a></li>
                        <li><a href="man">男性</a></li>
                        <li><a href="woman">女性</a></li>
                    </ul>
                </div>
                <h2>ジャンル</h2>
                @foreach( $genre_data as $genre)
                    <div class="child">
                        <img width="170" height="120" src="{{ $genre->genre_photo }}" alt="ジャンル画像">
                        <h2 class="title"><a href="detail">{{ $genre->genre_name }}</a></h2>
                    </div>
                @endforeach
            </div>
@endsection
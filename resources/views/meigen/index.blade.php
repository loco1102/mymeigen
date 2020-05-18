@extends('layouts.main')

@section('page', '')

@section('title', '名言サイト')

@section('content')
            <div class="container">
                <div class="card-contents">
                    <h2 class="izin"><a href="izin">{{ $izin_data->izin_name }}</a></h2>
                    <p class="meigen">{{ $meigen_data["meigen"] }}</p>
                </div>
                <div class="btnWrap">
                    <a href="index" class="btn">ランダム名言をリロード</a>
                </div>
            </div>
            <div class="container2">
                <h2>ジャンル</h2>
                @foreach( $genre_data as $genre)
                    <div class="child">
                        <img width="170" height="120" src="{{ $genre->genre_photo }}" alt="ジャンル画像">
                        <h2 class="title"><a href="detail">{{ $genre->genre_name }}</a></h2>
                    </div>
                @endforeach
            </div>
            <div class="container">
                <div class="btnList">
                    <a href="search" class="btn">一覧</a>
                </div>
            </div>
@endsection
@extends('layouts.main')

@section('page', '')

@section('title', '名言サイト')

@section('content')
            <div class="container">
                <div class="card-contents">
                    <h3 class="izin"><a href="{{ url('meigen/izin', $izin_data->id) }}">{{ $izin_data->izin_name }}</a></h3>
                    <p class="meigen">{{ $meigen_data["meigen"] }}</p>
                </div>
                <div class="btnWrap">
                    <a href="index" class="btn">ランダム名言をリロード</a>
                </div>
            </div>
            <div class="container2">
                <h3>ジャンル</h3>
                
                @foreach( $genre_data as $genre)
                    <div class="child">
                        <img width="170" height="120" src="{{ $genre->genre_photo }}" alt="ジャンル画像">
                        <h3 class="title"><a href="{{ url('meigen/genre/detail', $genre->id) }}">{{ $genre->genre_name }}</a></h3>
                    </div>
                    @if ($genre->id == 6)
                        @break
                    @endif
                @endforeach
            </div>
            <div class="container">
                <div class="btnList">
                    <a href="/meigen/search" class="btn">一覧</a>
                </div>
            </div>
@endsection
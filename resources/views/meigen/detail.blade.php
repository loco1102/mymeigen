@extends('layouts.main')

@section('page', 'ジャンル詳細')

@section('title', 'ジャンル詳細')

@section('content')
            <div class="image">
                <img src="{{ $genre_data->genre_photo }}" width="405" height="499" alt="ジャンル">
                <h2>{{ $genre_data->genre_name }}</h2>
            </div>
            <div class="container">
                <div class="card-contents">
                    <p class="comment">{{ $genre_data->comment }}</p>
                </div>
                <div class="btnBack">
                    <a href="javascript:history.back();" class="btn">一つ前に戻る</a>
                </div>
            </div>
            <div class="container">
                @foreach( $meigen_data as $meigen)
                <div class="card-contents">
                    <h2 class="izin"><a href="{{ url('meigen/izin', $meigen->id) }}">{{ $meigen->izin->izin_name }}</a></h2>
                    <p class="meigen">{{ $meigen->meigen }}</p>
                </div>
                @endforeach
            </div>
@endsection
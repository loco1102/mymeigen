@extends('layouts.main')

@section('page', '名前順')

@section('title', '名前順')

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
            <div class="name">
                @foreach( $izin_data as $izin)
                <ul>
                    <li><a href="{{ url('meigen/izin', $izin->id) }}">{{ $izin->izin_name }}</a></li>
                </ul>
                @endforeach
            </div>
        </div>
@endsection
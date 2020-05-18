@extends('layouts.main')

@section('page', '名前順')

@section('title', '名前順')

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
            <div class="name">
                @foreach( $izin_data as $izin)
                <ul>
                    <li><a href="izin">{{ $izin->izin_name }}</a></li>
                </ul>
                @endforeach
            </div>
        </div>
@endsection
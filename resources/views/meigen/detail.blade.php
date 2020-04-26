@extends('layouts.main')

@section('page', 'ジャンル詳細')

@section('title', 'ジャンル詳細')

@section('content')
            <div class="image">
                <img src="{{ asset('/images/yuu0100-073.jpg') }}" width="405" height="499" alt="ジャンル">
                <h2>友情</h2>
            </div>
            <div class="container">
                <div class="card-contents">
                    <p class="comment">"友情"に関連する名言集</p>
                </div>
                <div class="btnBack">
                    <a href="#" class="btn">一つ前に戻る</a>
                </div>
            </div>
            <div class="container">
                <div class="card-contents">
                    <h2 class="izin"><a href="izin">ソクラテス</a></h2>
                    <p class="meigen">I know nothing except the fact of my ignorance.</p>
                    <p class="meigen">私が知っているのは、自分が何も知らないということだけだ。</p>
                </div>
            </div>
@endsection
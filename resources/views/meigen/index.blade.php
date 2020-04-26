@extends('layouts.main')

@section('page', '')

@section('title', '名言サイト')

@section('content')
            <div class="container">
                <div class="card-contents">
                    <h2 class="izin"><a href="izin">ソクラテス</a></h2>
                    <p class="meigen">I know nothing except the fact of my ignorance.</p>
                    <p class="meigen">私が知っているのは、自分が何も知らないということだけだ。</p>
                </div>
                <div class="btnWrap">
                    <a href="#" class="btn">ランダム名言をリロード</a>
                </div>
            </div>
            <div class="container2">
                <h2>ジャンル</h2>
                <div class="child">
                    <img width="170" height="120" src="../images/yuu0100-073.jpg" alt="ジャンル画像">
                    <h2 class="title"><a href="detail">友情</a></h2>
                </div>
                <div class="child">
                    <img width="170" height="120" src="../images/yuu0100-073.jpg" alt="ジャンル画像">
                    <h2 class="title"><a href="detail">お金</a></h2>
                </div>
                <div class="child">
                    <img width="170" height="120" src="../images/yuu0100-073.jpg" alt="ジャンル画像">
                    <h2 class="title"><a href="detail">恋愛</a></h2>
                </div>
                <div class="child">
                    <img width="170" height="120" src="../images/yuu0100-073.jpg" alt="ジャンル画像">
                    <h2 class="title"><a href="detail">人生</a></h2>
                </div>
                <div class="child">
                    <img width="170" height="120" src="../images/yuu0100-073.jpg" alt="ジャンル画像">
                    <h2 class="title"><a href="detail">努力</a></h2>
                </div>
                <div class="child">
                    <img width="170" height="120" src="../images/yuu0100-073.jpg" alt="ジャンル画像">
                    <h2 class="title"><a href="detail">仕事</a></h2>
                </div>
            </div>
            <div class="container">
                <div class="btnList">
                    <a href="search" class="btn">一覧</a>
                </div>
            </div>
@endsection
@extends('layouts.main')

@section('page', '偉人')

@section('title', '偉人')

@section('content')
            <div class="image">
                <img src="{{ asset('/images/socrates.jpg') }}" width="405" height="499" alt="偉人">
            </div>
            <div class="container">
                <div class="card-contents">
                    <h2 class="izin">ソクラテス</h2>
                    <p>ソクラテス（希：Σωκράτης、ラテン語：Socrates、紀元前469年頃 - 紀元前399年4月27日[要検証 – ノート]）は、古代ギリシアの哲学者である。長母音を発音するならソークラテース。妻は、悪妻として知られる、クサンティッペ。ソクラテス自身は著述を行っていないので、その思想は弟子の哲学者プラトンやクセノポンなどの著作を通じ知られている。(from Wikipedia)</p>
                    <p><a onclick="javascript:pageTracker._trackPageview('/outgoing/ja.wikipedia.org/wiki/%E3%82%BD%E3%82%AF%E3%83%A9%E3%83%86%E3%82%B9');" href="https://ja.wikipedia.org/wiki/%E3%82%BD%E3%82%AF%E3%83%A9%E3%83%86%E3%82%B9" title="Wikipedia（日本語版）" target="_blank">Wikipedia（日本語版）</a></p>
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
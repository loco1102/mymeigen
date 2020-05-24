@extends('layouts.main')

@section('page', '偉人')

@section('title', '偉人')

@section('content')
            <div class="image">
                <img src="{{ $izin_data->izin_photo }}" width="405" height="499" alt="偉人">
            </div>
            <div class="container">
                <div class="card-contents">
                    <h2 class="izin">{{ $izin_data->izin_name }}</h2>
                    <p>{{ $izin_data->detail }}</p>
                </div>
                <div class="btnBack">
                    <a href="javascript:history.back();" class="btn">一つ前に戻る</a>
                </div>
            </div>
            <div class="container">
                @foreach( $meigen_data as $meigen)
                <div class="card-contents">
                    <h2 class="izin"><a href="{{ url('meigen/izin', $meigen->izin->id) }}">{{ $meigen->izin->izin_name }}</a></h2>
                    <p class="meigen">{{ $meigen->meigen }}</p>
                </div>
                @endforeach
            </div>
@endsection
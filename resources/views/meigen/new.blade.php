@extends('layouts.main')

@section('page', '新着')

@section('title', '新着順')

@section('content')
            <div class="container">
                @foreach( $meigen_data as $meigen)
                <div class="card-contents">
                    <h2 class="izin"><a href="{{ url('meigen/izin', $meigen->izin->id) }}">{{ $meigen->izin->izin_name }}</a></h2>
                    <p class="meigen">{{ $meigen->meigen }}</p>
                </div>
                @endforeach
            </div>
@endsection
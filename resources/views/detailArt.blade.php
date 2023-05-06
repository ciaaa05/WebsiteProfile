@extends('master')

@section('art_name', $art['name'])

@section('content')
    <div class="detail-art">
        <img src="{{ asset('assets/' . $art['pics']) }}" style="max-width: 25vw; max-height: 25vw" alt="">
        <div class="desc">
            <h1>{{ $art['name'] }}</h1>
            <p>Year: {{ $art['year'] }}</p>
            <p>Type: {{ $art['type'] }}</p>
            <p>{{ $art['description'] }}</p>
        </div>
    </div>
@endsection

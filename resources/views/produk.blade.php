@extends('layouts.master')
<link rel="stylesheet" href="{{ asset('style.css') }}" />
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Kaushan+Script&display=swap" rel="stylesheet">
@section('title')
    Dunia Indomie dengan Segala Keajaibannya
    @foreach ($produk as $item)
        {{$item['name']}}
    @endforeach
@endsection

@section('description')
    @foreach ($produk as $item)
        {{$item['desc']}}
    @endforeach
@endsection

@section('content')
@include("layouts.navbar")
<div class="text-center container py-5">
    <h1 class="mb-1 best-custom">Welcome to My Dream World</h1>
    <h3 class="mt-1 best-custom-h3">Where everything is all about Indomie !</h3>
    <div class="row">
        @foreach ($produk as $item)
        <div class="col-lg-4 col-md-12 mb-4">
            <div class="card
            @if ($item['status'] == 'R')
                silver
            @elseif ($item['status'] == 'SR')
                gold
            @else
                red
            @endif row-custom" >
                <div class="bg-image hover-zoom ripple ripple-surface ripple-surface-light"data-mdb-ripple-color="light">
                    <img src="/img/indomie/{{$item['image']}}" class="w-100" />
                    <a href="/indomie/{{$item['id']}}">
                        <div class="hover-overlay">
                            <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </div>
                    </a>
                </div>
                <div class="card-body">
                    <a href="/indomie/{{$item['id']}}" class="text-reset stretched-link">
                        <h5 class="card-title mb-3 font-weight-bold">{{ $item['name'] }}</h5>
                    </a>
                    <p>Status : {{ $item['status'] }}</p>
                    <h6 class="mb-3">{{ $item['price'] }}</h6>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>

@include("layouts.footer")

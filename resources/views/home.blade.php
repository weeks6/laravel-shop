@extends('layout.app')
@section('title', 'Print`d - каталог')
@section('body')
    <div class="container">

        <div class="row">
            <div class="d-flex flex-wrap">
                @foreach ($products as $product)
                    <div class="col-lg-3 col-md-4 col-sm-6 col-12">
                        <div class="card m-2">
                            @if ($product->photo)
                                <img src="{{ $product->photo }}" class="card-img-top">
                            @else
                                <div class="align-self-center mt-2 img-placeholder"></div>
                            @endif
                            <div class="card-body">
                                <h5 class="card-title">{{ $product->title }}</h5>
                                <p class="card-text">{{ $product->model }}</p>
                                <button type="button"
                                    class="btn btn-outline-primary">{{ number_format($product->price_ru, 2, '.', '') }}₽</button>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

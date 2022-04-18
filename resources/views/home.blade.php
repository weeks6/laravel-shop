@extends('layout.app')
@section('title', 'CopyStar - каталог')
@section('body')
    <div class="container">

        <div class="row">
            <form action="/" method="GET">
                <!-- @csrf
                @method('GET') -->
                <div class="mb-3 col-lg-3 col-md-4 col-sm-6 col-12">

                    <label for="exampleFormControlTextarea1" class="form-label">Сортировка</label>
                    <select class="form-select" name="order" aria-label="Default select example">
                        <option value="price:asc"
                            @if (request()->get('order') == 'price:asc')
                                selected
                            @endif
                        >
                        Сначала дешевле
                        </option>
                        <option value="price"
                            @if (request()->get('order') == 'price')
                                selected
                            @endif>
                            Сначала дороже</option>
                    </select>


                </div>

                <button class="btn btn-primary btn-sm" type="submit">Применить</button>
            </form>
            <div class="d-flex flex-wrap">
                @foreach ($products as $product)
                    <a href="/product/{{$product->id}}" class="no-link col-lg-3 col-md-4 col-sm-6 col-12">
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
                </a>
                @endforeach
            </div>
        </div>
    </div>
@endsection

@extends('layout.app')
@section('title', 'Print`d - вход')
@section('body')
    <div class="container">
        <h1>Товары</h1>
        <div class="row mb-4">
            <div class="col-lg-6 col-md-6 col-12">
                <form action="/admin/products" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="formFile" class="form-label">Изображение</label>
                        <input class="form-control" type="file" id="formFile">
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Наименование</label>
                        <input type="text" name="title" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Модель</label>
                        <input type="text" name="model" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Количество</label>
                        <input type="number" name="amount" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Цена</label>
                        <input type="number" name="price_ru" class="form-control" id="exampleInputPassword1" required>
                    </div>


                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Дата производства</label>
                        <input type="date" name="produced_at" class="form-control" id="exampleInputPassword1" required>
                    </div>

                    <label for="select" class="form-label">Категория</label>
                    <select id="select" name="category_id" class="form-select mb-3" required>
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}">{{ $category->title }}</option>
                        @endforeach
                    </select>

                    @if ($countries->count())
                        <label for="select" class="form-label">Страна</label>
                        <select id="select" name="country_id" class="form-select mb-3">
                            @foreach ($countries as $country)
                                <option value="{{ $country->id }}">{{ $country->title }}</option>
                            @endforeach
                        </select>
                    @endif

                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>

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

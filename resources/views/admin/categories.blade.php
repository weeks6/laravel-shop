@extends('layout.app')
@section('title', 'CopyStar - Категории')
@section('body')
    <div class="container">
        <h1>Категории</h1>
        <div class="row mb-4">
            <div class="col-lg-6 col-md-6 col-12">
                <form action="/admin/categories" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Название</label>
                        <input type="text" name="title" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp">
                    </div>

                    <button type="submit" class="btn btn-primary">Добавить</button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                @foreach ($categories as $category)
                    <div class="card category-card mb-2">
                        <div class="d-flex align-items-center justify-content-between p-2">
                            <h5 class="card-title">{{ $category->title }}</h5>
                            <form action="/admin/categories" method="POST">
                                @csrf
                                @method('DELETE')
                                <input type="hidden" value="{{ $category->id }}" name="id">
                                <button type="submit" class="delete-button btn btn-outline-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

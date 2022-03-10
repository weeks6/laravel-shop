@extends('layout.app')
@section('title', 'Print`d - вход')
@section('body')
    <div class="container">
        <h1>Вход</h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <form action="/login" method="POST">
                    @csrf
                    @method('POST')

                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Логин*</label>
                        <input type="text" name="login" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль*</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Войти</button>
                </form>
            </div>
        </div>
    </div>
@endsection

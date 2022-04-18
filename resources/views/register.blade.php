@extends('layout.app')
@section('title', 'CopyStar - регистрация')
@section('body')
    <div class="container">
        <h1 class="mb-4">Регистрация</h1>
        <div class="row">
            <div class="col-lg-6 col-md-6 col-12">
                <form action="/register" method="POST">
                    @csrf
                    @method('POST')
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Имя*</label>
                        <input type="text" name="name" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Фамилия*</label>
                        <input type="text" name="surname" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Отчество</label>
                        <input type="text" name="patronymic" class="form-control" id="exampleInputEmail1"
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Логин*</label>
                        <input type="text" name="login" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Email*</label>
                        <input type="email" name="email" class="form-control" id="exampleInputEmail1" required
                            aria-describedby="emailHelp">
                    </div>
                    <div class="mb-3">
                        <label for="exampleInputPassword1" class="form-label">Пароль*</label>
                        <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
                    </div>
                    <div class="mb-3 form-check">
                        <input type="checkbox" class="form-check-input" id="exampleCheck1" name="rules" required>
                        <label class="form-check-label" for="exampleCheck1">Даю согласие на обработку персональных
                            данных*</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Отправить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Обратная связь')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-md-6">
                <h1 class="mb-2 text-left">Форма обратной связи</h1>
                <form class="form-horizontal" method="POST" action="/contact">
                    {{ csrf_field() }}
                    <div class="form-group">
                        <label for="Topic">Тема: </label>
                        <input type="text" class="form-control" id="topic" placeholder="Тематика обращения" name="topic" required>
                    </div>

                    <div class="form-group">
                        <label for="message">Сообщение: </label>
                        <textarea type="text" class="form-control luna-message" id="message" placeholder="Текст письма" name="message" required></textarea>
                    </div>

                    <div class="form-group">
                        <label for="Topic">Файл: </label>
                        <input type="file" class="form-control-file" id="file" name="file" required>
                    </div>

                    <div class="form-group">
                        <button type="submit" class="btn btn-primary" value="Send">Отправить</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.app')
@section('title', 'Обратная связь')

@section('content')
    <h1 class="mb-2 text-left">Форма обратной связи</h1>

    <form class="form-horizontal" method="POST" action="{{ route('contact-form') }}" enctype="multipart/form-data">
        {{ csrf_field() }}
        <div class="form-group">
            <label for="Topic">Тема: </label>
            <input type="text" class="form-control" id="topic" placeholder="Тематика обращения" name="topic">
        </div>

        <div class="form-group">
            <label for="message">Сообщение: </label>
            <textarea type="text" class="form-control luna-message" id="message" placeholder="Текст обращения"
                      name="message"></textarea>
        </div>

        <div class="d-none field-post-created_at required">
            <input type="email" id="email" class="form-control" name="email" value="{{ auth()->user()->email }}" aria-required="true">
        </div>

        <div class="form-group">
            <label for="Topic">Файл: </label>
            <input type="file" class="form-control-file" id="file" name="file">
        </div>

        <div class="form-group">
            <button type="submit" class="btn btn-primary" value="Send">Отправить</button>
        </div>
    </form>
@endsection

@extends('layouts.app')

@section('title-block')Обновление записи@endsection

@section('content')
    <h1>Обновление записи</h1>

    <form action="{{ route('contact-update-submit', $data->id) }}" method="post">
        {{ csrf_field() }}

        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control" value="{{ $data->name }}">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control" value="{{ $data->email }}">
        </div>
        <div class="form-group">
            <label for="subject">Тема сообщения</label>
            <input type="text" name="subject" placeholder="Тема сообщения" id="subject" class="form-control" value="{{ $data->subject }}">
        </div>
        <div class="form-group">
            <label for="message">Сообщение</label>
            <textarea name="message" id="message" class="form-control" placeholder="Введите сообщение">
                {{ $data->message }}
            </textarea>
        </div>

        <button type="submit" class="btn btn-success">Обновить</button>
    </form>
@endsection

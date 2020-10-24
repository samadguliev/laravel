@extends('layouts.app')

@section('title-block')Все сообщения@endsection

@section('content')
    <h1>Все сообщения</h1>
    @foreach($data as $message)
        <div class="alert alert-info">
            <h3>{{ $message->subject }}</h3>
            <p>{{ $message->email }}</p>
            <p><small>{{ $message->created_at }}</small></p>
            <a href="{{ route('contact-data-one', $message->id) }}">
                <button class="btn btn-warning">
                    Детальная
                </button>
            </a>
        </div>
    @endforeach
@endsection


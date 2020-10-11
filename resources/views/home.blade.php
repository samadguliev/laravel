@extends('layouts.app')

@section('title-block')Главная страница@endsection

@section('content')
    <h1>Главная страница</h1>
    <p>
        Lorem ipsum dolor sit amet, consectetur adipisicing elit. At consequatur eligendi exercitationem
        necessitatibus nostrum nulla optio rem repellendus. Eum explicabo ipsa molestias pariatur veniam
        veritatis. Labore, magni, tenetur? Asperiores, vel?
    </p>
@endsection

@section('aside')
    @parent
    <p>Доп текст</p>
@endsection


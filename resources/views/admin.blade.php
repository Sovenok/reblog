@extends('layout')
@section('title', 'Контакты')
@section ('content')
    <h1>Мы находимся на планете Земля</h1>
    @if(Auth::check())
<ul>
    <li class="page-item"><a class="page-link" href="#"> Редактировать посты </a></li>
    <li class="page-item"><a class="page-link" href="#"> Редактировать категории </a>    </li>
    <li class="page-item"><a class="page-link" href="#"> Редактировать соцсети </a></li>

</ul>
    @endif
@endsection
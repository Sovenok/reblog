@extends('layout')
@section('title', 'Контакты')
@section ('content')
    <h1>Мы находимсяя</h1>
    @if(Auth::check())
        <ul>
            <li class="page-item"><a class="page-link" href="#"> Редактировать посты </a></li>
            <li class="page-item"><a class="page-link" href="{{route('admin_category')}}"> Редактировать категории </a>    </li>
            <li class="page-item"><a class="page-link" href="#"> Редактировать соцсети </a></li>

        </ul>
    @endif
    <form align="center">
    <table>
        <tr>
            <th>Id</th>
            <th>Ключ</th>
            <th>Название</th>
        </tr>
        @foreach($categories as category)
            <tr>
                <td>{{$category->id}}</td>
                <td><input type="text" value="{{$category->key}}"> </td>
                <td><input type="text" value="{{$category->categories}}"></td>
                <td><input type="button" value="Delete"></td>
            </tr>
            <input type="submit" value="Save all">
         @endforeach
    </table>
    </form>

@endsection
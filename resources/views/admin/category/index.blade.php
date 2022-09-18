@extends('layouts.app')
@section('title', 'Категории')
@section('content')
    <a href="{{route('admin.category.create')}}" class="btn btn-info mb-2">Добавить</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($categories as $category)
        <tr>
            <td>
                {{$category->id}}
            </td>
            <td>
                {{$category->name}}
            </td>
            <td>
                <a href="{{route('admin.category.edit', $category->id)}}" class="btn btn-warning" >Изменить</a>
                <form action="{{route('admin.category.destroy', $category->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit" class="btn btn-danger">Удалить</button>
                </form>
            </td>
        </tr>
        @endforeach
        </tbody>
    </table>
@endsection

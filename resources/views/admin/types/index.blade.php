@extends('layouts.app')
@section('title', 'Типы')
@section('content')
    <a href="{{route('admin.type.create')}}" class="btn btn-info mb-2">Добавить</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Категория</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($types as $type)
        <tr>
            <td>
                {{$type->id}}
            </td>
            <td>
                {{$type->name}}
            </td>
            <td>
                {{$type->category->name}}
            </td>
            <td>
                <a href="{{route('admin.type.edit', $type->id)}}" class="btn btn-warning" >Изменить</a>
                <form action="{{route('admin.type.destroy', $type->id)}}" method="POST">
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

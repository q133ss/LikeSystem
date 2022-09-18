@extends('layouts.app')
@section('title', 'Услуги')
@section('content')
    <a href="{{route('admin.service.create')}}" class="btn btn-info mb-2">Добавить</a>
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Тип</th>
            <th>Действия</th>
        </tr>
        </thead>
        <tbody>
        @foreach($services as $service)
        <tr>
            <td>
                {{$service->id}}
            </td>
            <td>
                {{$service->name}}
            </td>
            <td>
                {{$service->type->name}}
            </td>
            <td>
                <a href="{{route('admin.service.edit', $service->id)}}" class="btn btn-warning" >Изменить</a>
                <form action="{{route('admin.service.destroy', $service->id)}}" method="POST">
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

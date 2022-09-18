@extends('layouts.app')
@section('title', 'Админка')
@section('content')
    <a href="{{route('admin.category.index')}}" class="btn btn-primary">Категории</a>
    <a href="{{route('admin.type.index')}}" class="btn btn-primary">Типы услуг</a>
    <a href="{{route('admin.service.index')}}" class="btn btn-primary">Услуги</a>
@endsection

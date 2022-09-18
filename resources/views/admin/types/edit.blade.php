@extends('layouts.app')
@section('title', 'Категории')
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Изменить тип услуги {{$type->name}}</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.type.update',$type->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="form-label" for="smallInput">Категория</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach($categories as $category)
                                    <option value="{{$category->id}}" @if($category->id == $type->category_id) selected @endif>{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="form-label" for="smallInput">Название</label>
                            <input id="smallInput" class="form-control form-control-sm" value="{{$type->name}}" type="text" name="name" placeholder="">
                        </div>
                    </div>
                </div>
                    <button class="btn btn-primary mt-2">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

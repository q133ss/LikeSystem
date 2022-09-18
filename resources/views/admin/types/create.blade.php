@extends('layouts.app')
@section('title', 'Создать тип услуги')
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Создать тип услуги</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.type.store')}}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-12">
                        <div>
                            <label class="form-label" for="smallInput">Категория</label>
                            <select name="category_id" class="form-control" id="">
                                @foreach($categories as $category)
                                <option value="{{$category->id}}">{{$category->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div>
                            <label class="form-label" for="smallInput">Название</label>
                            <input id="smallInput" class="form-control form-control-sm" type="text" name="name" placeholder="">
                        </div>
                    </div>
                </div>
                    <button class="btn btn-primary mt-2">Создать</button>
                </form>
            </div>
        </div>
    </div>
@endsection

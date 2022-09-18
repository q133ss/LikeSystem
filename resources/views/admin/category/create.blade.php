@extends('layouts.app')
@section('title', 'Категории')
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Создать категорию</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.category.store')}}" method="POST">
                    @csrf
                <div class="row">
                    <div class="col-12">
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

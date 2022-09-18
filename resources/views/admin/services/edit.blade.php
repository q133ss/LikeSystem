@extends('layouts.app')
@section('title', 'Изменить услугу')
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Изменить услугу</h4>
            </div>
            <div class="card-body">
                <form action="{{route('admin.service.update', $service->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div class="row">
                        <div class="col-12">
                            <div>
                                <label class="form-label" for="smallInput">Тип</label>
                                <select name="type_id" class="form-control" id="">
                                    @foreach($types as $type)
                                        <option value="{{$type->id}}" @if($service->type_id == $type->id) selected @endif>{{$type->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div>
                                <label class="form-label" for="smallInput">Название</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="name" value="{{$service->name}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">ID услуги</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="service_id" value="{{$service->service_id}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Цена</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="price" value="{{$service->price}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Качество</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="quality" value="{{$service->quality}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Старт</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="start" value="{{$service->start}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Скорость</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="speed" value="{{$service->speed}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Списание</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="write_offs" value="{{$service->write_offs}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Гарантия</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="guarantee" value="{{$service->guarantee}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Максимум</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="max" value="{{$service->max}}" placeholder="">
                            </div>

                            <div>
                                <label class="form-label" for="smallInput">Особенности</label>
                                <input id="smallInput" class="form-control form-control-sm" type="text" name="peculiarities" value="{{$service->peculiarities}}" placeholder="">
                            </div>
                        </div>
                    </div>
                    <button class="btn btn-primary mt-2">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection

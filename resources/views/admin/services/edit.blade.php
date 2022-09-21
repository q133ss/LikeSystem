@extends('layouts.app')
@section('title', 'Изменить услугу')
@section('meta')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@endsection
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Изменить услугу</h4>
            </div>
            <div class="card-body">
                <label for="" class="form-label">Язык</label>
                <select name="" id="" class="form-select" onchange="langChange($(this).val())">
                    @foreach($langs as $lang)
                        <option value="{{$lang->code}}" @if($lang->code == 'ru') selected @endif>{{$lang->name}}</option>
                    @endforeach
                </select>
                <form action="{{route('admin.service.update', $service->id)}}" method="POST">
                    @csrf
                    @method('PUT')
                    <div id="ru-form" class="row">
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
                    @foreach($langs as $lang)
                        @if($lang->code != 'ru')
                        <div class="row" id="{{$lang->code}}-form">
                            <div class="col-12">
                                <div>
                                    <label class="form-label" for="smallInput">Название</label>
                                    <input id="{{$lang->code}}-name" class="form-control form-control-sm" type="text" name="{{$lang->code}}-name" value="{{$service->getField('name', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">ID услуги</label>
                                    <input id="{{$lang->code}}-service_id" class="form-control form-control-sm" type="text" name="{{$lang->code}}-service_id" value="{{$service->getField('service_id', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Цена</label>
                                    <input id="{{$lang->code}}-price" class="form-control form-control-sm" type="text" name="{{$lang->code}}-price" value="{{$service->getField('price', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Качество</label>
                                    <input id="{{$lang->code}}-quality" class="form-control form-control-sm" type="text" name="{{$lang->code}}-quality" value="{{$service->getField('quality', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Старт</label>
                                    <input id="{{$lang->code}}-start" class="form-control form-control-sm" type="text" name="{{$lang->code}}-start" value="{{$service->getField('start', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Скорость</label>
                                    <input id="{{$lang->code}}-speed" class="form-control form-control-sm" type="text" name="{{$lang->code}}-speed" value="{{$service->getField('speed', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Списание</label>
                                    <input id="{{$lang->code}}-write_offs" class="form-control form-control-sm" type="text" name="{{$lang->code}}-write_offs" value="{{$service->getField('write_offs', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Гарантия</label>
                                    <input id="{{$lang->code}}-guarantee" class="form-control form-control-sm" type="text" name="{{$lang->code}}-guarantee" value="{{$service->getField('guarantee', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Максимум</label>
                                    <input id="{{$lang->code}}-max" class="form-control form-control-sm" type="text" name="{{$lang->code}}-max" value="{{$service->getField('max', $lang->code)}}" placeholder="">
                                </div>

                                <div>
                                    <label class="form-label" for="smallInput">Особенности</label>
                                    <input id="{{$lang->code}}-peculiarities" class="form-control form-control-sm" type="text" name="{{$lang->code}}-peculiarities" value="{{$service->getField('peculiarities', $lang->code)}}" placeholder="">
                                </div>
                            </div>
                        </div>
                        @endif
                    @endforeach
                    <button class="btn btn-primary mt-2">Изменить</button>
                </form>
            </div>
        </div>
    </div>
@endsection
@section('scripts')
    <script>
        function langChange(code){
            @foreach($langs as $lang)
            $('#{{$lang->code}}-form').hide()
            @endforeach
            $('#'+code+'-form').show()
        }
    </script>
@endsection

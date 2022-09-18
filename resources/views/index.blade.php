@extends('layouts.app')
@section('title','Главная')
@section('meta')
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@endsection
@section('content')
    <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
        @foreach($categories as $key => $category)
            <input type="radio" class="btn-check" name="btnradio" id="btnradio{{$key}}" autocomplete="off" @if($key == 0) checked @endif>
            <label class="btn btn-outline-primary waves-effect" for="btnradio{{$key}}" onclick="serviceChange('{{$category->id}}', '{{$categories->count()}}')">{{$category->name}}</label>
        @endforeach
    </div>

    <div class="row">
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                <div class="alert alert-warning" role="alert">
                    <div class="alert-body">
                        {{ $error }}
                    </div>
                </div>
            @endforeach
        @endif
    <div class="col-md-6 col-12">
        @foreach($categories as $key => $category)
        <form action="{{route('new.order')}}" method="POST" id="{{$category->id}}-service-form" @if($key != 0) style="display: none" @endif>
            @csrf
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">{{$category->name}}</h4>
            </div>
            <div class="card-body">
                <div class="mb-1">
                    <label class="form-label" for="basicSelect">Тип накрутки</label>
                    <select class="form-select" onchange="typeChange($(this).val())" id="basicSelect vk-type-select">
                        @foreach($category->types as $k => $type)
                        <option @if($k == 0) selected @endif value="{{$type->id}}">{{$type->name}}</option>
                        @endforeach
                    </select>
                </div>
                @if(isset($category->types->first()->id))
                <div id="service-area">
                    <div class="mb-1" id="vk-likes-service">
                        <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>
                        <select class="form-select" name="service_id" id="basicSelect">
                            @foreach(App\Models\Type::find($category->types->first()->id)->services as $key => $serve)
                            <option value="{{$serve->service_id}}" @if($key == 0) selected @endif>{{$serve->name}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                @endif
                <div class="mb-1">
                    <label class="form-label" for="basicInput">Ссылка на пост</label>
                    <input type="text" name="link" class="form-control" id="basicInput" placeholder="">
                </div>

                <div class="mb-1">
                    <label class="form-label" for="basicInput">Количество</label>
                    <input type="text" name="quantity" class="form-control" id="basicInput" placeholder="">
                </div>

                <button class="btn btn-primary waves-effect waves-float waves-light">Отправить</button>
            </div>
        </div>
        </form>
        @endforeach
    </div>
    <div class="col-md-6 col-12">
        <h1>Лайки <small class="text-muted">(Цена указана за 100 шт)</small></h1>
        <dl class="row">
            <dt class="col-sm-3">Итого:</dt>
            <dd class="col-sm-9"><strong>100 ₽</strong></dd>
        </dl>
        <dl class="row">
            <dt class="col-sm-3">Запуск:</dt>
            <dd class="col-sm-9">В течение 5-20 минут после оплаты*.</dd>
        </dl>

        <dl class="row">
            <dt class="col-sm-3">Скорость:</dt>
            <dd class="col-sm-9">До 120-200 в час</dd>
        </dl>

{{--        <dl class="row">--}}
{{--            <dt class="col-sm-3">Минимальный заказ:</dt>--}}
{{--            <dd class="col-sm-9">100</dd>--}}
{{--        </dl>--}}

{{--        <dl class="row">--}}
{{--            <dt class="col-sm-3">Максимальный заказ:</dt>--}}
{{--            <dd class="col-sm-9">30000</dd>--}}
{{--        </dl>--}}

{{--        <dl class="row">--}}
{{--            <dt class="col-sm-3">Требования к аккаунту:</dt>--}}
{{--            <dd class="col-sm-9">Профиль должен быть открытым и иметь аватарку, на профиле не должно быть возрастных ограничений.</dd>--}}
{{--        </dl>--}}
{{--    </div>--}}
    </div>
@endsection
@section('scripts')
    <script src="/assets/indexpage.js"></script>

    <script>
        function typeChange(id){
            $.ajax({
                url: '/api/type-change/'+id,
                method: 'POST',
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
                },
                data: 1,
                cache: false,
                success: function (data) {
                    $('#vk-likes-service').html(data)
                },
                error: function (xhr, ajaxOptions, thrownError) {
                    console.log(xhr.status);
                    console.log(xhr.responseText);
                }
            });
        }
    </script>
@endsection

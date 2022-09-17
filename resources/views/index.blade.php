@extends('layouts.app')
@section('title','Главная')
@section('meta')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
@endsection
@section('content')
    <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
        <label class="btn btn-outline-primary waves-effect" for="btnradio1" onclick="serviceChange('vk')">VK</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio2" onclick="serviceChange('inst')">Instagram</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio3" onclick="serviceChange(3)">TikTok</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio4" onclick="serviceChange(4)">YouTube</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio5" onclick="serviceChange(4)">Telegram</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio6" onclick="serviceChange(4)">Twitter</label>
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
        <form action="{{route('new.order')}}" method="POST" id="vk-form">
            @csrf
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">VK</h4>
            </div>
            <div class="card-body">
                <div class="mb-1">
                    <label class="form-label" for="basicSelect">Тип накрутки</label>
                    <select class="form-select" onchange="vkTypeSelect($(this).val())" id="basicSelect vk-type-select">
                        <option selected value="vk-likes-service">Лайки</option>
                        <option value="vk-polls-service">Опросы</option>
                        <option value="vk-subscribe-service">Подписчики</option>
                    </select>
                </div>

                <div id="service-area">
                    <div class="mb-1" id="vk-likes-service">
                        <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>
                        <select class="form-select" name="service_id" id="basicSelect">
                            <option value="400">Лайки качественные (70 руб.)</option>
                        </select>
                    </div>
                </div>

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

        <form action="{{route('new.order')}}" method="POST" style="display: none" id="inst-form">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Instagram</h4>
                </div>
                <div class="card-body">
                    <div class="mb-1">
                        <label class="form-label" for="basicSelect">Тип накрутки</label>
                        <select class="form-select" onchange="instTypeSelect($(this).val())" id="basicSelect vk-type-select">
                            <option selected value="inst-subscribe-service">Подписчики</option>
                            <option value="inst-like-service">Лайки</option>
                            <option value="inst-view-service">Просмотры</option>
                            <option value="inst-history-service">Просмотры историй</option>
                            <option value="inst-live-service">Прямой эфир</option>
                            <option value="inst-comments-service">Комментарии</option>
                            <option value="inst-coverage-service">Охват публикаций</option>
                            <option value="inst-save-service">Сохранения</option>
                        </select>
                    </div>

                    <div id="inst-service-area">
                        <div class="mb-1" id="inst-subscribe-service">
                            <label class="form-label" for="basicSelect">Вид накрутки</label>
                            <select class="form-select" name="service_id" id="basicSelect">
                                <option value="383">Подписчики RU & ЖИВЫЕ (65 руб.)</option>
                                <option value="428">Подписчики MIX REAL (45 руб.)</option>
                                <option value="375">Подписчики БЕЗ ОТПИСОК (45 руб.)</option>
                                <option value="263">Подписчики (30 руб.)</option>
                            </select>
                        </div>
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="basicInput">Ссылка на пост</label>
                        <input type="text" class="form-control" name="link" id="basicInput" placeholder="">
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="basicInput">Количество</label>
                        <input type="text" name="quantity" class="form-control" id="basicInput" placeholder="">
                    </div>

                    <button class="btn btn-primary waves-effect waves-float waves-light">Отправить</button>
                </div>
            </div>
        </form>
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
@endsection

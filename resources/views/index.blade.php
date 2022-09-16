@extends('layouts.app')
@section('title','Главная')
@section('content')
    <div class="btn-group mb-2" role="group" aria-label="Basic radio toggle button group">
        <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off" checked="">
        <label class="btn btn-outline-primary waves-effect" for="btnradio1">VK</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio2">Inst</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio3">TikTok</label>

        <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
        <label class="btn btn-outline-primary waves-effect" for="btnradio3">YouTube</label>
    </div>

    <div class="col-md-6 col-12">
        <form action="" id="vk-form">
            @csrf
            <input type="hidden" name="service_id" id="service_id">
            <div class="card">
            <div class="card-header">
                <h4 class="card-title">VK</h4>
            </div>
            <div class="card-body">
                <div class="mb-1">
                    <label class="form-label" for="basicSelect">Тип накрутки</label>
                    <select class="form-select" id="basicSelect vk-type-select">
                        <option selected value="1">Лайки</option>
                        <option value="2">Опросы</option>
                        <option value="3">Подписчики</option>
                    </select>
                </div>

                <div class="mb-1" id="vk-likes-service">
                    <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>
                    <select class="form-select" id="basicSelect">
                        <option>Лайки качественные (70 руб.)</option>
                    </select>
                </div>

                <div class="mb-1" id="vk-subscribe-service" style="display: none">
                    <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>
                    <select class="form-select" id="basicSelect">
                        <option>Подписчики на страницу (150 руб.)</option>
                        <option>Друзья в профиль (150 руб.)</option>
                        <option>Подписчики на страницу качественные (80 руб.)</option>
                        <option>Друзья в профиль качественные (150 руб.)</option>
                    </select>
                </div>

                <div class="mb-1" id="vk-polls-service" style="display: none">
                    <label class="form-label" for="basicSelect">Услуга (Стоимость за 100)</label>
                    <select class="form-select" id="basicSelect">
                    </select>
                </div>

                <div class="mb-1">
                    <label class="form-label" for="basicInput">Ссылка на пост</label>
                    <input type="text" class="form-control" id="basicInput" placeholder="">
                </div>

                <div class="mb-1">
                    <label class="form-label" for="basicInput">Количество (минимум 10)</label>
                    <input type="text" class="form-control" id="basicInput" placeholder="">
                </div>

                <button class="btn btn-primary waves-effect waves-float waves-light">Отправить</button>
            </div>
        </div>
        </form>
    </div>
@endsection
@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>
    <script src="/assets/indexpage.js"></script>
@endsection

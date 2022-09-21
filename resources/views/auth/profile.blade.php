@extends('layouts.app')
@section('title', 'Мой профиль')
@section('content')
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
            <form action="{{route('profile.update')}}" method="POST">
                @csrf
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Данные профиля</h4>
                    </div>
                    <div class="card-body">
                        <div class="mb-1">
                            <label class="form-label" for="basicInput">Имя</label>
                            <input type="text" name="name" value="{{$user->name}}" class="form-control" id="basicInput" placeholder="">
                        </div>

                        <div class="mb-1">
                            <label class="form-label" for="basicInput">Email</label>
                            <input type="email" name="email" class="form-control" id="basicInput" value="{{$user->email}}" placeholder="">
                        </div>

                        <button class="btn btn-primary waves-effect waves-float waves-light">{{__('services.send')}}</button>
                    </div>
                </div>
            </form>


        <form action="{{route('profile.update.password')}}" method="POST">
            @csrf
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Пароль</h4>
                </div>
                <div class="card-body">
                    <div class="mb-1">
                        <label class="form-label" for="basicInput">Старый пароль</label>
                        <input type="password" name="old_password" value="" class="form-control" id="basicInput" placeholder="">
                    </div>

                    <div class="mb-1">
                        <label class="form-label" for="basicInput">Новый пароль</label>
                        <input type="password" name="new_password" class="form-control" id="basicInput" value="" placeholder="">
                    </div>

                    <button class="btn btn-primary waves-effect waves-float waves-light">{{__('services.send')}}</button>
                </div>
            </div>
        </form>
    </div>
@endsection

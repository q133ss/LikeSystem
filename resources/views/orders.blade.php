@extends('layouts.app')
@section('title', 'Мои заказы')
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>Услуга</th>
            <th>Цена</th>
        </tr>
        </thead>
        <tbody>
        @foreach($orders as $order)
            <tr>
                <td>
                    {{$order->id}}
                </td>
                <td>
                    {{$order->service->name}}
                </td>
                <td>
                    {{$order->service->price}}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection

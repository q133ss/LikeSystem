@extends('layouts.app')
@section('title'){{__('orders.title')}}@endsection
@section('content')
    <table class="table">
        <thead>
        <tr>
            <th>ID</th>
            <th>{{__('orders.service')}}</th>
            <th>{{__('orders.cost')}}</th>
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

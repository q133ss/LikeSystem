<?php
namespace App\Services;

use Illuminate\Support\Facades\Http;

class OrderService{
    public static function create(array $data)
    {
        $response = Http::get('https://way01.com/api/v2?action=add-order&key='.env('API_KEY')
            .'&service='.$data['service_id']
            .'&link='.$data['link']
            .'&quantity='.$data['quantity']);
        if($response->body() != '{"error":"Incorrect request"}'){
            //make order and ...
            return to_route('orders')->withSuccess('Заказ успешно создан!');
        }else{
            return back()->withErrors('Произошла ошибка, попробуйте еще раз');
            //return back()->withErrors($response->body());
        }
    }
}

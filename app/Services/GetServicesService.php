<?php
namespace App\Services;
use Illuminate\Support\Facades\Http;

class GetServicesService{
    public static function getServices(){
        $response = Http::get('https://way01.com/api/v2?action=services&key='.env('API_KEY'));
        return $response->body();
    }
}

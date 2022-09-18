<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use App\Models\Type;
use Illuminate\Http\Request;

class TypeController extends Controller
{
    public function typeChange($type_id)
    {
        $services = Type::find($type_id)->services;
        return view('ajax.index.services', compact('services'))->render();
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\ServiceController\StoreRequest;
use App\Models\Language;
use App\Models\Service;
use App\Models\Type;
use App\Services\LocaleService;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::get();
        return view('admin.services.index', compact('services'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $types = Type::get();
        return view('admin.services.create', compact('types'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreRequest $request)
    {
        Service::create($request->validated());
//        $service = new Service();
//        $service->type_id = $request->type_id;
//        $service->service_id = $request->service_id;
//        $service->name = $request->name;
//        $service->price = $request->price;
//        $service->quality = $request->quality;
//        $service->start = $request->start;
//        $service->speed = $request->speed;
//        $service->write_offs = $request->write_offs;
//        $service->guarantee = $request->guarantee;
//        $service->max = $request->max;
//        $service->peculiarities = $request->peculiarities;
//        $service->save();
        return to_route('admin.service.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $service = Service::find($id);
        $types = Type::get();
        $langs = Language::get();
        return view('admin.services.edit', compact('service', 'types','langs'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->type_id = $request->type_id;
        $service->service_id = $request->service_id;
        $service->name = $request->name;
        $service->price = $request->price;
        $service->quality = $request->quality;
        $service->start = $request->start;
        $service->speed = $request->speed;
        $service->write_offs = $request->write_offs;
        $service->guarantee = $request->guarantee;
        $service->max = $request->max;
        $service->peculiarities = $request->peculiarities;
        $service->save();

        //langs
        $langs = Language::get();
        $services = ['name','service_id','price','quality','start','speed','write_offs','guarantee','max','peculiarities'];
        foreach ($langs as $lang){
            foreach ($services as $serv){
                $val = $lang->code.'-'.$serv;
                if($request->has($val) != null){
                    LocaleService::translate('App\Models\Service', $service->id, $lang->code, $serv, $request->$val);
                }
            }
        }

        return to_route('admin.service.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $service = Service::find($id);
        $service->delete();
        return to_route('admin.service.index');
    }
}

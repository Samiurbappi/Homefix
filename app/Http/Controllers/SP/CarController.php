<?php

namespace App\Http\Controllers\SP;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CarController extends Controller
{
    public function carService()
    {
        return view('services.car.create_service_view');
    }
    public function carServicestore()
    {
        // dd(request()->all());
        Car::create([
            'name'=>request()->name,
            'price'=>request()->price,
            'time'=>request()->time,
            'user_id'=>Auth::user()->id
        ]);
        return redirect()->route('car.service.list');
    }
    public function serviceList()
    {
        $ser = Car::all();
        return view('services.car.service_list',compact('ser'));
    }
    public function approve($id)
    {
        $data = Car::find($id);
        $data->update(['status'=>'Approve']);
        return redirect()->back();
    }
    public function delete($id)
    {
        $data = Car::find($id);
        $data->delete();
        return redirect()->back();  
    }

}

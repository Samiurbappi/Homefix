<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Car;
use Validator;

class ServiceController extends Controller
{
    // applience

    public function applience()
    {
        return view('applience.applience_repare');
    }

    //painting

    public function painting()
    {
        return view('painting_renovation.painting_room');
    }

    //shifting

    public function shifting()
    {
        return view('shifting.house_shifting_service');
    }

    //ac reparing

    public function AC_reparing()
    {
        return view('AC_reparing.AC_servicing');
    }

    // car rental

    public function car_rental()
    {
        $data = Car::all();
        return view('car_rental.car_painting',compact('data'));
    }

    public function addCar()
    {
        return view('car_rental.add');
    }
    public function storeCar(Request $req)
    {
    //    $req->validate([
    //         'car_name'=>'required',
    //         'brand_name'=>'required',
    //         'model_name'=>'required',
    //         'rent'=>'requried'
    //     ]);
        Car::create([
            'car'=>$req->car_name,
            'brand_name'=>$req->brand_name,
            'model_name'=>$req->model_name,
            'rent'=>$req->rent,
        ]);
        return redirect()->back()->with('success','Added Succesfully');

    }

     //emergency service

    public function emergency_service()
    {
        return view('emergency_service.ambulance_service');
    }

    //electrical and plumbing

    public function plumbing_service()
    {
        return view('electric_plumbing.plumbing_service');
    }


}



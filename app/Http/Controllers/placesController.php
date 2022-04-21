<?php

namespace App\Http\Controllers;

use App\Models\Cities;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class placesController extends Controller
{

    public function __construct()
    {
        $this->middleware('admin');
    }
    public function create(){

        return view('admin.places.create');
    }

    public function store(){

        $data = request()-> validate([

            'name' => 'required',
            'link' => 'required',
            'type' => 'required',
            'Description' => 'required',
            'image' => ['required', 'image']]);

        $city_id = request()-> input('city_id');

        $image_path= request()->file('image')->store('uploads', 'public');
        $image =Image::make("storage/{$image_path}");
        $image->fit(1200,1200);
        $image->save();

        $city = Cities::find($city_id) ;
        $city->places()-> create([

            'name' =>$data['name'],
            'Descrption' =>$data['Description'],
            'image' =>$image_path,
            'type'=> $data['type'],
            'link' =>$data['link']
        ]);

        return redirect('/home');
    }

}

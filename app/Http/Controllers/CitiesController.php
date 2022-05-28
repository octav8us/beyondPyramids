<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use Illuminate\Database\Eloquent\Builder;

/**
 * @mixin Builder
 */

use App\Models\Cities;

class CitiesController extends Controller

{

    public function __construct()
    {
        $this->middleware('admin');
    }
public function create(){

    return view('admin.cities.create');
}

    public function store(){

        $data = request()-> validate([
            'name' => 'required',
            'Description' => 'required',
            'image' => ['required', 'image']]);



        $image_path= request()->file('image')->store('uploads', 'public');
        $image =Image::make("storage/{$image_path}");
        $image->fit(550,400);
        $image->save();

        Cities::create([

            'name' =>$data['name'],
            'Description' =>$data['Description'],
            'image' =>$image_path
        ]);

        return redirect('/home');
    }

}

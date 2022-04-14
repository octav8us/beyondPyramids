<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class placesController extends Controller
{

    public function create(){

        return view('admin.places.create');
    }

}

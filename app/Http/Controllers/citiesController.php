<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class citiesController extends Controller

{

    public function __construct()
    {
        $this->middleware('admin');
    }
public function create(){

    return view('admin.cities.create');
}
}

<?php

namespace App\Http\Controllers;
use App\Models\Cities;
use App\Models\Places;
use App\Models\User;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        /*
         *
        $this->middleware('auth');
         * */
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $cities =Cities::all();
        $places =Places::all();
        $cityFavourites =(auth()->user()) ? auth()->user()->cityFavourite: ["0"];
        $placeFavourites =(auth()->user()) ? auth()->user()->placeFavourite: ["0"];
/*        dd($cityFavourites);*/
        return view('home' , compact('cities' , 'places','placeFavourites','cityFavourites'));
    }

    public function search(Request $request){
        // Get the search value from the request
        $search = $request->input('search');

        // Search in the title from the cities and places table
         $cities = Cities::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('Description', 'LIKE', "%{$search}%")
            ->get();

        $places = Places::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('Description', 'LIKE', "%{$search}%")
            ->get();

        // Return the search view with the resluts compacted
        return view('search', compact('places', 'cities'));
    }

}

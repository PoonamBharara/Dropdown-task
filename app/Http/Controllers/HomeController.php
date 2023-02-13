<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(){
        $Country = Country::all();
        $countries = $Country->toArray();
        return view('welcome', ['countries' => $countries] );
    }

    public function getData(Request $request)
    {
        $user = DB::table('users')->where('id', $id)->first();
        return view('welcome', ['user' => $user]);  
    }

}

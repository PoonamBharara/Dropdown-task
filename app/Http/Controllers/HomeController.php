<?php

namespace App\Http\Controllers;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    public function index(REQUEST $req){
        $data['country'] = DB::table('tbl_countries')->orderBy('name', 'asc')->get();
        return view('welcome', $data);
    }


    public function getState(Request $request){  
        $state= DB::table('tbl_states')->where('country_id', $request->state_id)->orderBy('name', 'asc')->get();        
        return response()->json($state); 
    }

    public function getCity(Request $request){
        $city= DB::table('tbl_cities')->where('state_id', $request->city_id)->orderBy('name', 'asc')->get();        
        return response()->json($city);        
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $res = DB::table('countries')
            ->select('countries.id','countries.en_name','countries.ar_name', 'en_capital', 'ar_capital')
            ->join('timezones','timezones.country_id','=','countries.id')
            ->where('countries.en_name', 'LIKE', '%'. $request->city .'%')
            ->orWhere('countries.ar_name', 'LIKE', '%'. $request->city .'%')
            ->orWhere('countries.en_capital', 'LIKE', '%'. $request->city .'%')
            ->orWhere('countries.ar_capital', 'LIKE', '%'. $request->city .'%')
            ->orWhere('timezones.name', 'LIKE', '%'. $request->city .'%')
            ->get();
        return json_decode($res);
    }
}

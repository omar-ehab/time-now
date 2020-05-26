<?php

namespace App\Http\Controllers;

use App\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function show(Country $country)
    {
        return view('town', compact('country'));
    }
}

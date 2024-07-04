<?php

namespace App\Http\Controllers;
use App\Models\Property;
use Illuminate\Http\Request;

class homeController extends Controller
{
    public function index(){
        $properties=Property::OrderBy('created_at','desc')->limit(4)->get();
        return view('welcome',['properties'=>$properties]);
    }
}

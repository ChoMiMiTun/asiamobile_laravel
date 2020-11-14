<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FrontendController extends Controller
{
    
    public function home(){
    	// $items = Item::all();
     //    $brands = Brand::all();
    	// return view('frontend.mainpage',compact('items', 'brands'));
    	return view('frontend.mainpage');
    }

}

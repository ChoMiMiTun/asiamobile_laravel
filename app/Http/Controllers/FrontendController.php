<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Category;
use App\Subcategory;
use App\Brand;
use App\Slide;
use App\Blog;

class FrontendController extends Controller
{
    
    public function home(){
    	$items = Item::all();
        $brands = Brand::all();
        $slides = Slide::all();
        $blogs = Blog::all();
    	return view('frontend.homepage.mainpage',compact('items', 'brands', 'slides', 'blogs'));
    	// return view('frontend.homepage.mainpage');
    }

    public function cart($value='')
    {
        return view('frontend.cart');
    }

    public function review($value='')
    {
        return view('frontend.review');
    }

    public function contact($value='')
    {
        return view('frontend.contact');
    }

    // public function blog($value='')
    // {
    //     return view('frontend.blog');
    // }

}

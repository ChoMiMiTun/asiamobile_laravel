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
    	$blogs = Blog::all();
        return view('frontend.cartpage');
    }

    public function brands($value='')
    {
    	$brands = Brand::all();
        return view('frontend.itembybrand', compact('brands'));
    }

    public function review($value='')
    {
        return view('frontend.review');
    }

    public function contact($value='')
    {
        return view('frontend.contact');
    }

    public function itemdetail($id)
    {
        $item = Item::find($id);
        return view('frontend.itemdetail',compact('item'));
    }


    public function blogdetail($id)
    {
    	$blogdetail = Blog::find($id);
        return view('frontend.blogdetail',compact('blogdetail'));
    }


    //signin signup

     public function signin($value='')
    {
        return view('frontend.signinpage');
    }

    public function signup($value='')
    {
        return view('frontend.signuppage');
    }

}

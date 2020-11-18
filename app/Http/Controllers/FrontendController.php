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
        $categories = Category::all();
    	return view('frontend.homepage.mainpage',compact('items', 'brands', 'slides', 'blogs', 'categories'));
    }

    public function cart($value='')
    {
    	$blogs = Blog::all();
        return view('frontend.cartpage');
    }

    public function itemsbysubcategory($id)
    {
        $mysubcategory = Subcategory::find($id);
        return view('frontend.itemsbysubcategory', compact('mysubcategory'));
    }

    public function itemsbybrand($id)
    {
        $mybrand = Brand::find($id);
        return view('frontend.itemsbybrand', compact('mybrand'));
    }

    public function brands($value='')
    {
    	$brands = Brand::all();
        return view('frontend.brands', compact('brands'));
    }

    // public function review($value='')
    // {
    //     return view('frontend.feedback');
    // }

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

    public function blogs()
    {
        $blogs = Blog::all();
        return view('frontend.blogs',compact('blogs'));
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

    public function search(Request $request)
    {
        // $searchData = $request->search;
        // dd($searchData);

        // $items = Item::where('name', 'like', "%".$searchData."%");
        // $brands = Brand::all();
        // $slides = Slide::all();
        // $blogs = Blog::all();
        // $categories = Category::all();
        // return view('frontend.search-result',compact('items', 'brands', 'slides', 'blogs', 'categories'));

return view('frontend.search-result');
    }


}

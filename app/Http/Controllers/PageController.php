<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Brand;
class PageController extends Controller
{
     public function main($value='')
    {
        // $route=Route::current();
        //dd($route);
        //return view ('main') ;
        $items=Item::all();
        $brands=Brand::all();
        //dd($items);
        return view('main',compact('items','brands'));
    }

     public function brandfun($value='')
    {
        return view ('brand') ;
        
    }

     public function itemdetailfun($id)
    {
        $item=Item::find($id);
        return view ('itemdetail',compact('item')) ;
        
    }

     public function loginfun($value='')
    {
        return view ('login') ;
        
    }

     public function promotionfun($value='')
    {
        return view ('promotion') ;
        
    }

     public function registerfun($value='')
    {
        return view ('register') ;
        
    }

     public function shoppingcartfun($value='')
    {
        return view ('shoppingcart') ;
        
    }

     public function subcategoryfun($value='')
    {
        return view ('subcategory') ;
        
    }
}

<?php

namespace App\Http\Controllers;
use App\category;
use App\Subcategory;
use Illuminate\Http\Request;

class SubcategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $subcategories=Subcategory::all();
       //dd($items);
       return view('backend.subcategories.index',compact('subcategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
         $categories=Category::all();
        //$subcategories=Subcategory::all();
        return view('backend.subcategories.create',compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //dd($request);

        //Validation
         $request->validate([
         
         "name" => 'required',
         "category" => 'required'
         ]);
        //If include file,upload file
        /*$imageName=time().'.'.$request->photo->extension();
        $request->photo->move(public_path('backend/itemimg'),$imageName);
        $path='backend/itemimg/'.$imageName;*/
        //Data insert
        $subcategory=new Subcategory;
        $subcategory->name=$request->name;
        $subcategory->category_id=$request->category;
        $subcategory->save();
        //redirect
        return redirect()->route('subcategories.index');

    

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function show(Subcategory $subcategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function edit(Subcategory $subcategory)
    {
        $categories=Category::all();
        
        return view('backend.subcategories.edit',compact('categories','subcategory'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Subcategory $subcategory)
    {
         //dd()

        //validation
         $request->validate([
         
         "name" => 'required',
         "category" => 'required'
         ]);
        //file upload,if data
        /*if($request->hasFile('photo')){
        $imageName=time().'.'.$request->photo->extension();
       
        $request->photo->move(public_path('backend/itemimg'),$imageName);
        $path='backend/itemimg/'.$imageName;
    }else{
        $path=$request->oldphoto;
    }*/
        
        //data update
        
        $subcategory->name=$request->name;
       
        $subcategory->category_id=$request->category;
        $subcategory->save();
        //redirect
        return redirect()->route('subcategories.index');
    
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Subcategory  $subcategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(Subcategory $subcategory)
    {
        //
    }
}

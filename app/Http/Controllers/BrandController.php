<?php

namespace App\Http\Controllers;

use App\Models\Brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index($request)
    {
        if($request->id == null){
            $brand = null;
        }
        else if($request->id == "new"){
            $brand = "new";
        }
        else {
            $brand = Brand::where('id', $request->id)->first();
        }
    
        $brands = Brand::orderby("name")->get();

        return view("admin.brand", ["data"=>$brands, "brandData"=>$brand]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //validate $request
        $request->validate([
            "name"=>"required|unique:brands"
        ]);

        //if validate successfuly

        if($request->status == null){
            $status = 0;
        }
        else {
            $status = 1;
        }

        $newBrand = new Brand;
        $newBrand->name = $request->name;
        $newBrand->status = $status;
        $newBrand->save();

        return back()->with("success", "New brand created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function show(Brand $brand)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function edit(Brand $brand)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Brand $brand)
    {

        if($request->status == null){
            $status = 0;
        }
        else {
            $status = 1;
        }
        
        $Brand = Brand::find($brand);
        $Brand->name = $request->name;
        $Brand->status = $status;
        $Brand->save();

        return back()->with("success", "Successfuly update!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Brand  $brand
     * @return \Illuminate\Http\Response
     */
    public function destroy(Brand $brand)
    {
        $Brand = Brand::find($brand);
        $Brand->delete();

        return back()->with("success", "Töröltük a márkát!");
    }
}

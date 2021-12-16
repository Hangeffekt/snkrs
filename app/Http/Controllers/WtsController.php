<?php

namespace App\Http\Controllers;

use App\Models\Wts;
use App\Models\Post;
use App\Models\Brand;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\URL;

class WtsController extends Controller
{

    public function main(Request $request)
    {
        return view("main", ["MainFilter" => "home_body"]);
    }

    public function login(Request $request)
    {
        return view("login", ["MainFilter" => "login_body"]);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        $Products = Wts::where("post", strtoupper($request->path()))->get();

        return view("store", ["Products" => $Products]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $Brands = Brand::get();
        $Posts = Post::get();

        return view("newproduct", ["Brands" => $Brands, "Posts" => $Posts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $newWts = new Wts;
        $newWts->brand = $request->brand;
        $newWts->type = $request->type;
        $newWts->price = $request->price;
        $newWts->size = $request->size;
        $newWts->condition = $request->condition;
        $newWts->post = $request->post;
        $newWts->save();

        return back()->with("success", "New wts created!");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Wts  $wts
     * @return \Illuminate\Http\Response
     */
    public function show(Wts $wts)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Wts  $wts
     * @return \Illuminate\Http\Response
     */
    public function edit(Wts $wts)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Wts  $wts
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Wts $wts)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Wts  $wts
     * @return \Illuminate\Http\Response
     */
    public function destroy(Wts $wts)
    {
        //
    }
}

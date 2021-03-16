<?php

namespace App\Http\Controllers;

use App\API1;
use Illuminate\Http\Request;

class API1Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('api1.index');
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\API1  $aPI1
     * @return \Illuminate\Http\Response
     */
    public function show(API1 $aPI1)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\API1  $aPI1
     * @return \Illuminate\Http\Response
     */
    public function edit(API1 $aPI1)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API1  $aPI1
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, API1 $aPI1)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API1  $aPI1
     * @return \Illuminate\Http\Response
     */
    public function destroy(API1 $aPI1)
    {
        //
    }
}

<?php

namespace App\Http\Controllers;

use App\API3;
use Illuminate\Http\Request;

class API3Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('API3.index');
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
     * @param  \App\API3  $aPI3
     * @return \Illuminate\Http\Response
     */
    public function show(API3 $aPI3)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\API3  $aPI3
     * @return \Illuminate\Http\Response
     */
    public function edit(API3 $aPI3)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API3  $aPI3
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, API3 $aPI3)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API3  $aPI3
     * @return \Illuminate\Http\Response
     */
    public function destroy(API3 $aPI3)
    {
        //
    }
}

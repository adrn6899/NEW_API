<?php

namespace App\Http\Controllers;

use App\API2;
use Illuminate\Http\Request;

class API2Controller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('API2.index');
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
     * @param  \App\API2  $aPI2
     * @return \Illuminate\Http\Response
     */
    public function show(API2 $aPI2)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\API2  $aPI2
     * @return \Illuminate\Http\Response
     */
    public function edit(API2 $aPI2)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\API2  $aPI2
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, API2 $aPI2)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\API2  $aPI2
     * @return \Illuminate\Http\Response
     */
    public function destroy(API2 $aPI2)
    {
        //
    }
}

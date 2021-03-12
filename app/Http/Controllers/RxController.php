<?php

namespace App\Http\Controllers;

use App\rx;
use Illuminate\Http\Request;

class RxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('rx.index');
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
        dd($request);
        // $rx = New rx;
        // $rx->Brand_Name = $request->input('brand_name');
        // $rx->Generic_Name = $request->input('generic_name');
        // $rx->Description = $request->input('description');
        // $rx->Ask_Doctor = $request->input('ask_doctor');
        // $rx->Dosage = $request->input('dosage');
        // $rx->Pregnant = $request->input('pregnant');
        // $rx->Is_Branded = $request->input('is_branded');
        // $rx->Medicine_Name = $request->input('medicine_name');
        // $rx->RXCUI_ID = $request->input('rxcui_id');
        // $rx->rx = $request->input('interaction');
        // $rx->Severity = $request->input('severity');
        // // $rx->save();
        // dd($rx);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function show(rx $rx)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function edit(rx $rx)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, rx $rx)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\rx  $rx
     * @return \Illuminate\Http\Response
     */
    public function destroy(rx $rx)
    {
        //
    }
}

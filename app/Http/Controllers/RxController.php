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

    }

    public function drugStore(Request $request)
    {
        //
        //dd([$request, $request->input('brand'), $request->get('brand'), request()->brand]);
        $rx = New rx;
        $rx->Brand_Name = $request->input('brand');
        $rx->Generic_Name = $request->input('gener');
        $rx->Description = $request->input('descrip');
        $rx->Ask_Doctor = $request->input('askdoc');
        $rx->Dosage = $request->input('dose');
        $rx->Pregnant = $request->input('pregg');
        $rx->Is_Branded = $request->input('isbran');
        $rx->Medicine_Name = $request->input('mdname');
        $rx->RXCUI_ID = $request->input('rxid');
        $rx->Interaction = $request->input('inter');
        $rx->Severity = $request->input('seve');
        $rx->save();


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

<?php

namespace App\Http\Controllers;

use App\Openfda;
use Illuminate\Http\Request;

class OpenfdaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return view('openfda.index');
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
     * @param  \App\Openfda  $openfda
     * @return \Illuminate\Http\Response
     */
    public function show(Openfda $openfda)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Openfda  $openfda
     * @return \Illuminate\Http\Response
     */
    public function edit(Openfda $openfda)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Openfda  $openfda
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Openfda $openfda)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Openfda  $openfda
     * @return \Illuminate\Http\Response
     */
    public function destroy(Openfda $openfda)
    {
        //
    }
}

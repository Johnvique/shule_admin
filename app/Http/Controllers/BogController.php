<?php

namespace App\Http\Controllers;

use App\Bog;
use Illuminate\Http\Request;

class BogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bogs = Bog::all();
        return view('dashboard/bog',compact('bogs'));
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
        $bogs = new Bog;
        $bogs->name=$request->get ('name'); 
        $bogs->email=$request->get ('email'); 
        $bogs->phone=$request->get ('phone'); 
        $bogs->id_no=$request->get ('id_no'); 
        $bogs->location=$request->get ('location'); 
        $bogs->role=$request->get ('role'); 
        $bogs->gender=$request->get ('gender'); 
        $bogs->image=$request->get ('image'); 

        $bogs->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function show(Bog $bog)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function edit(Bog $bog)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Bog $bog)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Bog  $bog
     * @return \Illuminate\Http\Response
     */
    public function destroy(Bog $bog)
    {
        //
    }
}
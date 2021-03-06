<?php

namespace App\Http\Controllers;

use App\fee;
use Illuminate\Http\Request;

class FeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fees = fee::all();
        return view('dashboard/fee',compact('fees'));
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
        $fees = new fee;
        $fees->name=$request->get ('name');
        $fees->class=$request->get ('class');
        $fees->regno=$request->get ('regno');
        $fees->payable=$request->get ('payable');
        $fees->paid=$request->get ('paid');
        $fees->balance=$request->get ('balance');
        $fees->paydate=$request->get ('paydate');
        $fees->transNo=$request->get ('transNo');
        $fees->paymethod=$request->get ('paymethod');
        
        $fees->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function show(fee $fee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $fee = fee::find($id);
        return view('dashboard/actions/edit_fee',compact('fee'));
        
        return redirect('fee');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,$id)
    {
        $fee = fee::find($id);
        $fee->update([
            'name'=>$request->name,
            'class'=>$request->class,
            'regno'=>$request->regno,
            'payable'=>$request->payable,
            'paid'=>$request->paid,
            'balance'=>$request->balance,
            'paydate'=>$request->paydate,
            'transNo'=>$request->transNo,
            'paymethod'=>$request->paymethod,
        ]);

        return redirect('fee');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\fee  $fee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $fee = fee::find($id);
        $fee->delete();

        return redirect('fee');
    }
}

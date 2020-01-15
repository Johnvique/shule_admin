<?php

namespace App\Http\Controllers;

use App\Nonteaching;
use Illuminate\Http\Request;

class NonteachingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $non_teachings = Nonteaching::all();
        return view('dashboard/non_teaching',compact('non_teachings')); 
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
        $non_teachings =new Nonteaching;
        $non_teachings->name =$request->get ('name');
        $non_teachings->email =$request->get ('email'); 
        $non_teachings->phone =$request->get ('phone'); 
        $non_teachings->id_no =$request->get ('id_no'); 
        $non_teachings->location =$request->get ('location'); 
        $non_teachings->role =$request->get ('role'); 
        $non_teachings->gender =$request->get ('gender'); 
        $non_teachings->image =$request->get ('image'); 
        
        $non_teachings->save();
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Nonteaching  $nonteaching
     * @return \Illuminate\Http\Response
     */
    public function show(Nonteaching $nonteaching)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Nonteaching  $nonteaching
     * @return \Illuminate\Http\Response
     */
    public function edit(Nonteaching $nonteaching, $id)
    {
        $non_teaching = Nonteaching::find($id);
        return view('dashboard/actions/edit_non_teaching',compact('non_teaching'));

        return redirect('non_teaching');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Nonteaching  $nonteaching
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Nonteaching $nonteaching, $id)
    {
        $non_teaching = Nonteaching::find($id);
        $non_teaching->update([
            'name'=>$request->name,
            'email'=>$request->email,
            'phone'=>$request->phone,
            'id_no'=>$request->id_no,
            'location'=>$request->location,
            'role'=>$request->role,
            'gender'=>$request->gender,
            'image'=>$request->image,
        ]);

        return redirect('non_teaching');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Nonteaching  $nonteaching
     * @return \Illuminate\Http\Response
     */
    public function destroy(Nonteaching $nonteaching, $id)
    {
        $non_teaching= Nonteaching::find($id);
        $non_teaching->delete();
        
        return redirect('non_teaching');
    }
}

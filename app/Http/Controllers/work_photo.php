<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_photo_m;

class work_photo extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
        $new_planet = new work_photo_m();
        $planets = work_photo_m::all();
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/work_photo/'.$filename);
            $new_planet->image= $filename.'/'.$file->getFilename();
        }else{
            return $request;
            $new_planet->image='';
        }
        $new_planet->save();
        return redirect('/edit_work_photo'); 
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show()
    {
        //
        $photo = work_photo_m::all();
        return view('admin_list_of_work_photo',['photo'=>$photo]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
        $work_photo = work_photo_m::find($id);
        $work_photo->delete();
        return redirect('/edit_work_photo');
    }
}

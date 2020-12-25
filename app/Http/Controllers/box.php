<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Box_photo_sell;

class box extends Controller
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
        $new_box = new Box_photo_sell();
        $boxs = Box_photo_sell::all();
        $new_box->name=$request->input('name');
        $new_box->description=$request->input('description');
        $new_box->price=$request->input('price');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/boxs/'.$filename);
            $new_box->image= $filename.'/'.$file->getFilename();
        }else{
            return $request;
            $new_box->image='';
        }
        $new_box->save();
        return redirect('/box_edit'); 
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
        $boxs = Box_photo_sell::all();
        return view('admin_list_of_box',['box'=>$boxs]);
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
        $box = Box_photo_sell::find($id);
        $box->delete();
        return redirect('/box_edit');    
    }

    public function show_for_customers(){

        $boxs = Box_photo_sell::all();
        return view('list_of_boxs',['box'=>$boxs]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Plant;

class PlantController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
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
        $new_plant = new Plant();
        $planets = Plant::all();
        $new_plant->name=$request->input('name');
        $new_plant->description=$request->input('description');
        $new_plant->price=$request->input('price');
        $new_plant->type=$request->input('type');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/plants/'.$filename);
            $new_plant->image= $filename.'/'.$file->getFilename();
        }else{
            return $request;
            $new_plant->image='';
        }
        $new_plant->save();
        return redirect('/plant_edit');
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
        $plants = Plant::all();
        return view('admin_list_of_plant',['planet'=>$plants]);
    }

    public function show_for_customers()
    {
        //
        $plants = Plant::all();
        return view('list_of_plant',['planet'=>$plants]);
    }

    public function show_for_customers_one()
    {
        //
        $plants = Plant::all();
        $type=1;
        return view('list_type_plant',['plant'=>$plants,'type'=>$type]);
    }

    public function show_for_customers_two()
    {
        //
        $plants = Plant::all();
        $type=2;
        return view('list_type_plant',['plant'=>$plants,'type'=>$type]);
    }

    public function show_for_customers_three()
    {
        //
        $plants = Plant::all();
        $type=3;
        return view('list_type_plant',['plant'=>$plants,'type'=>$type]);
    }

    public function show_for_customers_four()
    {
        //
        $plants = Plant::all();
        $type=4;
        return view('list_type_plant',['plant'=>$plants,'type'=>$type]);
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

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
    }

    public function delete($id){     
        $plant = Plant::find($id);
        $plant->delete();
        return redirect('/plant_edit');    
    }
}

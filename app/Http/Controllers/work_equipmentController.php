<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_equipment;

class work_equipmentController extends Controller
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
        $new_work_equipment = new work_equipment();
        $work_equipments = work_equipment::all();
        $new_work_equipment->name=$request->input('name');
        $new_work_equipment->description=$request->input('description');
        $new_work_equipment->price=$request->input('price');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/work_equipments/'.$filename);
            $new_work_equipment->image= $filename.'/'.$file->getFilename();
        }else{
            return $request;
            $new_work_equipment->image='';
        }
        $new_work_equipment->save();
        return redirect('/work_equipment_edit');
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
        $work_equipments = work_equipment::all();
        return view('admin_work_equipment_edit',['work_equipment'=>$work_equipments]);
    }

    public function show_for_customers()
    {
        //
        $work_equipments = work_equipment::all();
        return view('list_of_work_equipment',['work_equipment'=>$work_equipments]);
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
    }
    public function delete($id){
     
        $work_equipment = work_equipment::find($id);
        $work_equipment->delete();
        return redirect('/work_equipment_edit');
    }
    
     public function edit_special_work_equipment_by_admin($id){     
        $work_equipment = work_equipment::where('id', '=', $id)->first();
        return view('edit_work_equipment_by_admin',['planet'=>$work_equipment]);
    }
}

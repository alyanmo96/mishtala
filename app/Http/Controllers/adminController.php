<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\admin;
use App\Models\Plant;
use App\Models\gift;
use App\Models\work_equipment;
use App\Models\Cart;
use App\Models\Box_photo_sell;
use App\Models\grass;

class adminController extends Controller
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
        $user =admin::all();
        return view('main',['user'=>$user,'layout'=>'create']);
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
        $user = new admin();
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->save();
        return redirect('/');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $user = admin::find($id);
        $users = admin::all();
        return view('main',['users'=>$users,'user'=>$user,'layout'=>'show']);
    }
    public function show_account()
    {
        //
        $users = admin::all();
        return view('admin_edit_account',['user'=>$users]);
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
        $user = admin::find($id);
        $users = admin::all();
        return view('enter',['users'=>$users,'user'=>$user,'layout'=>'edit']);
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
        $user = admin::find($id);
        $user->name=$request->input('name');
        $user->email=$request->input('email');
        $user->password=$request->input('password');
        $user->save();
        return redirect('/');
    }

    public function update_plant(Request $request)
    {
        //
        $id=$request->input('id');
        $change_plant = Plant::find($id);
        $planets = Plant::all();
        if($request->input('name')!=null){
            $change_plant->name=$request->input('name');
        }
        if($request->input('description')!=null){
            $change_plant->description=$request->input('description');
        }
        if($request->input('price')!=null){
            $change_plant->price=$request->input('price');
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/plants/'.$filename);
            $change_plant->image= $filename.'/'.$file->getFilename();
        }
        $change_plant->save();
        return redirect('/plant_edit');
    
    }


    public function update_grass(Request $request)
    {
        //
        $id=$request->input('id');
        $change_grass = grass::find($id);
        $grasss = grass::all();
        if($request->input('name')!=null){
            $change_grass->name=$request->input('name');
        }
        if($request->input('description')!=null){
            $change_grass->description=$request->input('description');
        }
        if($request->input('price')!=null){
            $change_grass->price=$request->input('price');
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/grass/'.$filename);
            $change_grass->image= $filename.'/'.$file->getFilename();
        }
        $change_grass->save();
        return redirect('/grass_edit');  
    }

    public function update_work_equipment(Request $request)
    {
        //
        $id=$request->input('id');
        $change_work_equipment = work_equipment::find($id);
        $work_equipment = work_equipment::all();
        if($request->input('name')!=null){
            $change_work_equipment->name=$request->input('name');
        }
        if($request->input('description')!=null){
            $change_work_equipment->description=$request->input('description');
        }
        if($request->input('price')!=null){
            $change_work_equipment->price=$request->input('price');
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/work_equipments/'.$filename);
            $change_work_equipment->image= $filename.'/'.$file->getFilename();
        }
        $change_work_equipment->save();
        return redirect('/work_equipment_edit');  
    }


    public function update_gift(Request $request)
    {
        //
        $id=$request->input('id');
        $change_gift = gift::find($id);
        $gift = gift::all();
        if($request->input('name')!=null){
            $change_gift->name=$request->input('name');
        }
        if($request->input('description')!=null){
            $change_gift->description=$request->input('description');
        }
        if($request->input('price')!=null){
            $change_gift->price=$request->input('price');
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/gifts/'.$filename);
            $change_gift->image= $filename.'/'.$file->getFilename();
        }
        $change_gift->save();
        return redirect('/gift_edit');  
    }


    public function update_box(Request $request)
    {
        //
        $id=$request->input('id');
        $change_box = Box_photo_sell::find($id);
        $box = Box_photo_sell::all();
        if($request->input('name')!=null){
            $change_box->name=$request->input('name');
        }
        if($request->input('description')!=null){
            $change_box->description=$request->input('description');
        }
        if($request->input('price')!=null){
            $change_box->price=$request->input('price');
        }
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/boxs/'.$filename);
            $change_box->image= $filename.'/'.$file->getFilename();
        }
        $change_box->save();
        return redirect('/box_edit');  
    }


    public function update_account(Request $request)
    {
        $user = admin::find(96);        
        if($request->input('name')!=' '){
            $user->name=$request->input('name');
        }
        if($request->input('password')!=' ' && $request->input('password')==$request->input('password2')){
            $user->password=$request->input('password');
        }
        $user->save();
        return redirect('/edit_account');
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
        $user = admin::find($id);
        $user->delete();
        return redirect('/');
    } 
    
    public function details(Request $request){
        $users = admin::all();
        if ($users[0]->name==$request->name && $users[0]->password == $request->password){
            return redirect('admin_page');
        }else{
            return redirect('/');
        }
    }
}

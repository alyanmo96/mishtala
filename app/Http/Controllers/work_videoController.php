<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_video;
use App\Models\work_photo_m;
use App\Models\grass;

class work_videoController extends Controller
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
        /*
        $new_work_photo = new work_video();
        $new_work_photo->link=$request->input('link');
        $work_photos = work_video::all();
        $new_work_photo->save();
        return redirect('/work_video');
        */


        $new_grass = new grass();
        $grasses = grass::all();
        $new_grass->name=$request->input('name');
        $new_grass->description=$request->input('description');
        $new_grass->price=$request->input('price');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/grass/'.$filename);
            $new_grass->image= $filename.'/'.$file->getFilename();
        }else{
            return $request;
            $new_grass->image='';
        }
        $new_grass->save();
        return redirect('/grass_edit');

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
        /*
        $work_photos = work_video::all();
        return view('admin_list_of_work_video',['work_photo'=>$work_photos]);
        */
        $grasses = grass::all();
        return view('admin_list_of_grass',['grass'=>$grasses]);

    }

    public function show_for_customers()
    {/*
        $work_videos = work_video::all();
        $work_photos = work_photo_m::all();
        return view('list_of_works',['work_video'=>$work_videos,'work_photo'=>$work_photos]);*/
        $grasses = grass::all();
        return view('list_of_grass',['grass'=>$grasses]);

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
     /*
        $work_photo = work_video::find($id);
        $work_photo->delete();
        return redirect('/work_video');
        */
        $grass = grass::find($id);
        $grass->delete();
        $grasses = grass::all();
        return view('admin_list_of_grass',['grass'=>$grasses]);
    }
    
    public function edit_special_grass_by_admin($id){     
        $grass = grass::where('id', '=', $id)->first();
        return view('edit_grass_by_admin',['planet'=>$grass]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\work_video;
use App\Models\work_photo_m;

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
        $new_work_photo = new work_video();
        $new_work_photo->link=$request->input('link');
        $work_photos = work_video::all();
        $new_work_photo->save();
        return redirect('/work_video');
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
        $work_photos = work_video::all();
        return view('admin_list_of_work_video',['work_photo'=>$work_photos]);
    }

    public function show_for_customers()
    {
        $work_videos = work_video::all();
        $work_photos = work_photo_m::all();
        return view('list_of_works',['work_video'=>$work_videos,'work_photo'=>$work_photos]);
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
     
        $work_photo = work_video::find($id);
        $work_photo->delete();
        return redirect('/work_video');
    }
}

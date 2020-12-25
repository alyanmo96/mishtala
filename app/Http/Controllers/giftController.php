<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\gift;

class giftController extends Controller
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
        $new_gift = new gift();
        $gifts = gift::all();
        $new_gift->name=$request->input('name');
        $new_gift->description=$request->input('description');
        $new_gift->price=$request->input('price');
        if($request->hasFile('image')){
            $file = $request->file('image');
            $extenstion = $file->getClientOriginalExtension();
            $filename = time().'.'.$extenstion;
            $file->move('uploads/gifts/'.$filename);
            $new_gift->image= $filename.'/'.$file->getFilename();
        }else{
            return $request;
            $new_gift->image='';
        }
        $new_gift->save();
        return redirect('/gift_edit');
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
        $gifts = gift::all();
        return view('admin_list_of_gifts',['gifts'=>$gifts]);
    }
    public function show_for_customers()
    {
        //
        $gifts = gift::all();
        return view('list_of_gifts',['gift'=>$gifts]);
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
     
        $gift = gift::find($id);
        $gift->delete();
        return redirect('/gift_edit');
    
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\admin;

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

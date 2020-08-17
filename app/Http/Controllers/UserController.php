<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Hash;


class UserController extends Controller
{
     public function __construct() 
    {
        $this->middleware('auth');
       
    }
	
	/**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $users=User::all();
		return view('users.index',compact ('users'));
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
    public function store(Request $request,User $user)
    {
        if($request->avatar->getClientOriginalName()){
        $ext=$request->avatar->getClientOriginalExtension();
        $file=rand(1,9999).'.'.$ext;
        $request->avatar->storeAs('public/avatars',$file);
       }
       else
       {
           $file='';
       }
        $user-> avatar = $file;
        $user-> first_name = $request->first_name;
		$user-> last_name = $request->last_name;
		$user-> phone_number = $request->phone_number;
		$user-> role = $request->role;
        $user-> email = $request->email;
        $user-> role= $request->role;
        $user-> password = Hash::make($request->password);
        $user->save();
        return redirect()->route('users.index')->with('success', 'User Created Successfully!');
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
    public function update(Request $request, User $user)
    {
        if(isset($request->avatar)&& $request->avatar->getClientOriginalName()){
            $ext=$request->avatar->getClientOriginalExtension();
            $file=rand(1,9999).'.'.$ext;
            $request->avatar->storeAs('public/avatars',$file);
           }
           else
           {
            if(!$user-> avatar)
            $file='';
            else   
            $file=$user-> avatar;
           }
        $user-> avatar = $file;
        $user-> first_name = $request->first_name;
		$user-> last_name = $request->last_name;
		$user-> phone_number = $request->phone_number;
		$user-> role = $request->role;
        $user-> email = $request->email;
        $user-> role= $request->role;
        
        $user->save();
        return redirect()->route('users.index')->with('success', 'User edited Successfully!');
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
}

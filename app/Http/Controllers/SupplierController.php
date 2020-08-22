<?php

namespace App\Http\Controllers;

use App\Supplier;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert;

class SupplierController extends Controller
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
        $suppliers=Supplier::all();
		return view('suppliers.index',compact ('suppliers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('suppliers.addSupplier');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Supplier $supplier)
    {
        if($request->image->getClientOriginalName()){
            $ext=$request->image->getClientOriginalExtension();
            $file=rand(1,9999).'.'.$ext;
            $request->image->storeAs('public/avatars',$file);
           }
           else
           {
               $file='';
           }

            $supplier-> image = $file;
            $supplier-> email=$request->email;
            $supplier-> contact_person=$request->contact_person; 
            $supplier-> company_name=$request->company_name; 
            $supplier-> address=$request->address;
            $supplier-> location=$request->location;
            $supplier-> company_phone=$request->company_phone;
            $supplier-> contact_phone=$request->contact_phone;

            $supplier->save();
            return redirect()->route('suppliers.index')->with('success', 'Supplier Created Successfully!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function show(Supplier $supplier)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function edit(Supplier $supplier)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Supplier $supplier)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Supplier  $supplier
     * @return \Illuminate\Http\Response
     */
    public function destroy(Supplier $supplier)
    {
        //
    }
}

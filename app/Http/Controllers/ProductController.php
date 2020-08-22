<?php

namespace App\Http\Controllers;

use App\Product;
use App\Category;
use App\Supplier;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products=Product::all();
       
        return view ('products.index',compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories=Category::all();
        $suppliers=Supplier::all();
        return view('products.addProduct',compact('categories','suppliers'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request,Product $product)
    {
        if($request->product_image->getClientOriginalName()){
            $ext=$request->product_image->getClientOriginalExtension();
            $file=rand(1,9999).'.'.$ext;
            $request->product_image->storeAs('public/products',$file);
           }
           else
           {
               $file='';
           }
           $product-> product_image = $file;
        $product->code=$request->code;
        $product->product_name=$request->product_name;
        $product->description=$request->description;
        $product->purchase_price=$request->purchase_price;
        $product->retail_price=$request->retail_price;
        $product->purchase_date=$request->purchase_date;
        $profit=$request->retail_price-$request->purchase_price;
        $product->profit_margin=$profit;
        $product->quantity=$request->quantity;
 
        $product->category_id=$request->category_id;
        $product->supplier_id=$request->supplier_id;
        $product->save();

        return redirect()->route('products.index')->with('success','Product added successfully');
    }

    /**
     * Display the specified resource.
     * $amountToPay=$request->activity_fee+ $request->adm_fee + $request->course_fees+$request->misc+$request->caution;                  //$data['total'] = $request->price * $request->quantity; 
       * $invoice->fee_payable=$amountToPay;
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function show(Product $product)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function edit(Product $product)
    {
       $arr['product']=$product;
       $categories=Category::all();
        $suppliers=Supplier::all();
        // $product=Product::find($id);
        //$contact = Contact::find($id);
       // $category=Category::all();
       // $supplier=Supplier::all();
      return view('products.editProduct',compact('product','categories','suppliers'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Product $product)
    {
        if(isset($request->product_image)&& $request->product_image->getClientOriginalName()){
            $ext=$request->product_image->getClientOriginalExtension();
            $file=rand(1,9999).'.'.$ext;
            $request->product_image->storeAs('public/products',$file);
           }
           else
           {
            if(!$product-> product_image)
            $file='';
            else   
            $file=$product-> product_image;
           }
           $product-> product_image = $file;
        $product->code=$request->code;
        $product->product_name=$request->product_name;
        $product->description=$request->description;
        $product->purchase_price=$request->purchase_price;
        $product->retail_price=$request->retail_price;
        $product->purchase_date=$request->purchase_date;
        $profit=$request->retail_price-$request->purchase_price;
        $product->profit_margin=$profit;
        $product->quantity=$request->quantity;
 
        $product->category_id=$request->category_id;
        $product->supplier_id=$request->supplier_id;
        $product->save();
        return redirect()->route('products.index')->with('success','Product updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Product  $product
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::destroy($id);
        return redirect()->back()->withToastSuccess('Product deleted Successfully!');
    }
}

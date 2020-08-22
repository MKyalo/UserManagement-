@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">  Inventory Products</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">products</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
  <!-- Main content -->
 <section class="content">
    <div class="content">
      <div class="container-fluid">	
	  <hr>
		<div class="row">



		<!--PRODUCTS TABLE-->
		<div class="col-md-12">
		    <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-edit"></i> Edit Product</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <form role="form" method="POST" action="{{route('products.update',$product->id)}}" enctype="multipart/form-data">
                @csrf
			  @method('PUT')
					

					<div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label >Product Code</label>
                                <input type="text" class="form-control" id="code" name="code" value="{{$product->code}}">
                            </div>

                            <div class="form-group">
                                <label >Product Name</label>
                                <input type="text" class="form-control" id="product_name" name="product_name" value="{{$product->product_name }}">
                            </div>
                            <div class="form-group">
                                <label for="Category">Category</label>
                                <select class="form-control" id="category_id" name="category_id"  placeholder="">
                                    <option value="">Select Category</option> 
                                        @foreach ($categories as $cat)
                                            <option value="{{$cat->id}}"
                                            
                                            @if($cat->id== $product->category_id)
                                            selected
                                            @endif
                                            
                                            >  {{$cat->category_name}} </option>
                                        @endforeach
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="Supplier">Supplier</label>
                                <select class="form-control" id="supplier_id" name="supplier_id"  placeholder="">
                                    <option value="">Select Supplier</option> 
                                        @foreach ($suppliers as $sup)
                                            <option value="{{$sup->id}}"
                                            
                                            @if($sup->id== $product->supplier_id)
                                                        selected
                                                        @endif
                                            
                                            >  {{$sup->company_name}} </option>
                                        @endforeach
                                </select>
                            </div>

                        </div> <!--col-md-6-->
                    <!-- Image Upload and Proeview-->
                    <div class="col-md-6 ">
                            <div class="form-group">
                            <label >Change Product Image</label>
                            <div class="input-group">
                            <div class="custom-file">
                                <input type="file" class="custom-file-input" id="product_image" name="product_image">
                                <label class="custom-file-label" >Choose file</label>
                            </div>
                            <div class="input-group-append">
                                <span class="input-group-text" id="">Upload</span>
                            </div>
                            </div>
                        </div>
                        
                        <div class="text-center">
                            <img src="{{asset('public/storage/products/'.$product->product_image)}}" width="150" height="150" class="img-fluid" alt="...">
                        </div>
                    </div><!--col-md-6-->

                    </div><!--row-->
				
				<div class="form-group">
				<label for="Description">Description</label>
				<textarea class="form-control" rows="5" id="description" name="description"  value="" placeholder="">{{$product->description }}</textarea>
				</div>

         <div class="row">   
				<div class="col-md-6">
                    <div class="form-group">
                        <label for="purchase_price">Purchase Price</label>
                        <input type="text" class="form-control" id="purchase_price" name="purchase_price" value="{{$product->purchase_price }}" >
                    </div>
                <div class="form-group">
                    <label for="Purchase Date">Purchase Date</label>
                    <input type="date" class="form-control" name="purchase_date" value="{{$product->purchase_date}}" data-inputmask-alias="datetime" data-inputmask-inputformat="yyy/mm/dd" data-mask>
				</div>

                </div><!--col-md-6-->
				
            
                <div class="col-md-6">
                    <div class="form-group">
                        <label for="retail_price">Retail Price</label>
                     <input type="text" class="form-control" id="retail_price" name="retail_price" value="{{$product->retail_price }}" >
                    </div>
                    <div class="form-group">
                        <label for="quantity">Purchase Quantity</label>
                        <input type="text" class="form-control" id="quantity" name="quantity" value="{{$product->quantity }}" >
                    </div>
                </div><!--col-md-6-->
		</div> <!--row-->	
        
        <!-- /.card-body -->
				
				<div class="modal-footer justify-content-between">
					<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
					<button type="submit" class="btn btn-primary">Save</button>
				</div>
				
		  </form>
                
                 
			
			</div> <!--card body-->
			</div><!--card-->
		</div><!--col-md-6-->
		<!--END OF USER TABLE-->


		</div> <!--row-->
	  
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
    </div>
  <!-- /.content -->
  <!--Data-tables-->

 </section>

 @endsection
 @section('scripts')
 
 <script type="text/javascript">

$(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#products').DataTable({
      "paging": true,
      "lengthChange": true,
      "searching": false,
      "ordering": true,
      "info": true,
      "autoWidth": false,
      "responsive": true,
    });
  });



</script>

 @endsection
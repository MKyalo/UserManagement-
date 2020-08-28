@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-folder"></i>  Inventory Products</h1>
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
                <h3 class="card-title"><a button type="button" href="{{route('products.create')}}" class="btn btn-success float-right" ><i class="far fa-plus-square"></i> Add Product</button></a></h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="products" class="table table-bordered table-hover">
                <thead>
											<tr>
												<th>No.</th>
												<th>IMAGE</th>
												<th>PRODUCT NAME</th>
												<th>CATEGORY</th>
												<th>PURCHASE PRICE</th>
												<th>SELL PRICE</th>
                        <th>PROFIT MARGIN </th>
												<th>ACTION</th>
											</tr>
									</thead>
                  <tbody>
                  @if(count($products))
                  @foreach ($products as $prod)
				  <tr>
                    <td>{{$prod->id}}</td>
                    <td><img class="table-avatar" src="{{asset('public/storage/products/'.$prod->product_image)}}" height="40" width="40" alt="Product Image"> </td>
                    <td> {{$prod->product_name}}</td>
                    <td>{{$prod->category->category_name}}</td>
                    <td>Ksh. {{$prod->purchase_price}}</td>
                    <td>Ksh. {{$prod->retail_price}}</td>
                    <td>
                    
                        
                      @if ($prod->purchase_price  < $prod->retail_price)
                          <span class=" text-success"><i class="fas fa-arrow-up text-sm">Ksh {{$prod->profit_margin}}</i></span>
                      @elseif ($prod->purchase_price > $prod->retail_price)
                          <span class="text-danger"><i class="fas fa-arrow-down text-sm"> Ksh {{$prod->profit_margin}}</i></span>
                      @endif
                    </td>
                    <td>
                        <div class="btn-group">
							<button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">Action </button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{route('products.show',$prod->id )}}" data-toggle="modal" data-target="#viewProduct{{$prod->id}}" class="btn btn primary">View </a>
									<a class="dropdown-item" href=" {{route('products.edit',$prod->id)}}" class="btn btn primary">Edit </a>
									<a class="dropdown-item" href="{{route('products.destroy',$prod->id)}}"data-toggle="modal" data-target="#deleteProduct{{$prod->id}}" class="btn btn primary" >Delete </a>
                                </div>
						</div><!-- /.btn-group -->
					</td>
                  </tr>
                  @include('products.product')	
          <!--MODAL TO CONFIRM DELETE-->
<div class="modal fade" id="deleteProduct{{$prod->id}}">
    <div class="modal-dialog">
      <div class="modal-content bg-normal">
        <div class="modal-header">
          <h4 class="modal-title">Are you sure you want to delete this Product? </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
            <form method="post" action="{{ route('products.destroy',$prod->id)}}">
                @method('DELETE')
                @csrf

              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-outline-dark">YES</button>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<!-- /. MODAL TO CONFIRM DELETE -->
				  @endforeach
                  @else
					<tr><td colspan="7"> No Products Found</td></tr>
				 @endif  

				</tbody>
				<tfoot>
                <tr>
                        <th>No.</th>
												<th>IMAGE</th>
												<th>PRODUCT NAME</th>
												<th>CATEGORY</th>
												<th>PURCHASE PRICE</th>
												<th>SELL PRICE</th>
                        <th>PROFIT MARGIN </th>
												<th>ACTION</th>
                    </tr>
                  </tfoot>
                </table>
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
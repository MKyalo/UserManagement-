@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-users"></i>  Supplier Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Suppliers</li>
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
	
		<!--SUPPLIER TABLE TABLE-->
		<div class="col-md-12">
		    <div class="card card-default">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-users"></i> All Suppliers</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="suppliers" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>Supplier ID</th>
                    <th>Logo</th>
                    <th>Company Name</th>
                    <th>Company Phone</th>
                    <th>email</th>
					          <th>Contact Person</th>
                    <th>Phone Number</th>
					          <th>Location</th>
					          <th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
                  @if(count($suppliers))
                  @foreach ($suppliers as $sup)
				  <tr>
				            <td>{{$sup->id}}</td>
                    <td><img class="table-avatar"
                       src="{{asset('public/storage/avatars/'.$sup->image)}}" height="40" width="40"
                       alt="Supplier Logo"> </td>
                    <td>{{$sup->company_name}}</td>
                    <td> {{$sup->company_phone}}</td>
                    <td>{{$sup->email}}</td>
					          <td>{{$sup->contact_person}}</td>
                    <td>{{$sup->contact_phone}}</td>
                    <td>{{$sup->location}}</td>
          
					          <td>
                      <div class="btn-group">
                        <button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">Action </button>
                          <div class="dropdown-menu">
                            <a class="dropdown-item" href="{{route('suppliers.show',$sup->id )}}" class="btn btn primary">View </a>
                            <a class="dropdown-item" href=" {{route('suppliers.edit',$sup->id)}}"data-toggle="modal" data-target="#editSupplier{{$sup->id}}" class="btn btn primary">Edit </a>
                            <a class="dropdown-item" href="{{route('suppliers.destroy',$sup->id)}}"data-toggle="modal" data-target="#deleteSupplier{{$sup->id}}" class="btn btn primary" >Delete </a>
                          </div>
                      </div><!-- /.btn-group -->
					          </td>
          </tr>
				  	
          <!--MODAL TO CONFIRM DELETE-->
<div class="modal fade" id="deleteSupplier{{$sup->id}}">
    <div class="modal-dialog">
      <div class="modal-content bg-normal">
        <div class="modal-header">
          <h4 class="modal-title">Are you sure you want to delete this Supplier? </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
            <form method="post" action="{{ route('suppliers.destroy',$sup->id)}}">
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
					<tr><td colspan="9"> No Supplier Data</td></tr>
				 @endif  

				</tbody>
			</table>
			</div> <!--card body-->
			</div><!--card-->
		</div><!--col-md-6-->
		<!--END OF SUPPLIER TABLE-->
			
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
    $('#suppliers').DataTable({
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
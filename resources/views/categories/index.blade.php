@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-folder"></i>  Category Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">categories</li>
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
		<!--Add user Form-->
			<div class="col-md-4">
		
			@include('categories.addForm')
			
			</div> 
		<!--./Add user Form-->
		<!--USER TABLE-->
		<div class="col-md-8">
		    <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-folder"></i> All Categories</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="categories" class="table table-bordered table-hover">
                  <thead>
                    <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                  @if(count($categories))
                  @foreach ($categories as $cat)
				  <tr>
                    <td>{{$cat->id}}</td>
                    <td>{{$cat->category_name}}</td>
                    <td> {{$cat->description}}</td>
                    <td>
                        <div class="btn-group">
							<button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">Action </button>
								<div class="dropdown-menu">
									<a class="dropdown-item" href="{{route('categories.show',$cat->id )}}"data-toggle="modal" data-target="#categoryInfo{{$cat->id}}" class="btn btn primary">View </a>
									<a class="dropdown-item" href=" {{route('categories.edit',$cat->id)}}"data-toggle="modal" data-target="#editCategory{{$cat->id}}" class="btn btn primary">Edit </a>
									<a class="dropdown-item" href="{{route('categories.destroy',$cat->id)}}"data-toggle="modal" data-target="#deleteCategory{{$cat->id}}" class="btn btn primary" >Delete </a>
                                </div>
						</div><!-- /.btn-group -->
					</td>
                  </tr>
          @include('categories.editForm')	
          @include('categories.view')
          <!--MODAL TO CONFIRM DELETE-->
<div class="modal fade" id="deleteCategory{{$cat->id}}">
    <div class="modal-dialog">
      <div class="modal-content bg-normal">
        <div class="modal-header">
          <h4 class="modal-title">Are you sure you want to delete this Category? </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
            <form method="post" action="{{ route('categories.destroy',$cat->id)}}">
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
					<tr><td colspan="4"> No Category Data</td></tr>
				 @endif  

				</tbody>
				<tfoot>
                <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Description</th>
                        <th>Action</th>
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
    $('#categories').DataTable({
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
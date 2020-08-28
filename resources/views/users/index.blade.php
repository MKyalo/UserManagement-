@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-users"></i>  User Management</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">users</li>
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
		
			@include('users.addUser')
			
			</div> 
		<!--./Add user Form-->
		<!--USER TABLE-->
		<div class="col-md-8">
		    <div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-users"></i> All Users</h3>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="users" class="table table-bordered table-hover">
                  <thead>
                  <tr>
                    <th>User ID</th>
                    <th>Profile Photo</th>
                    <th>First Name</th>
                    <th>Last Name</th>
					<th>Phone Number</th>
                    <th>Email</th>
					<th>Role</th>
					<th>Action</th>
					
                  </tr>
                  </thead>
                  <tbody>
                  @foreach ($users as $user)
				  <tr>
				 
          <input type="hidden" class="delUser_id" value="{{$user->id}}">
                    <td>{{$user->id}}</td>
                    <td><img class="table-avatar"
                       src="{{asset('public/storage/avatars/'.$user->avatar)}}" height="40" width="40"
                       alt="User profile picture"> </td>
                    <td>{{$user->first_name}}</td>
                    <td> {{$user->last_name}}</td>
                    <td>{{$user->phone_number}}</td>
					          <td>{{$user->email}}</td>
					          <td>
                      @if ($user->role == 'Admin')
                      <span class=" badge badge-success">Admin</span>
                      
                      @elseif ($user->role== 'Sales')
                      <span class=" badge badge-info">Sales </span>
                      
                      @elseif ($user->role== 'User')
                      <span class=" badge badge-danger"> User</span>
                      @endif
                    </td>
					<td><div class="btn-group">
								<button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">Action </button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="{{route('users.show',$user->id )}}" data-toggle="modal" data-target="#viewUser{{$user->id}}" class="btn btn primary">View </a>
										<a class="dropdown-item" href=" {{route('users.edit',$user->id)}}"data-toggle="modal" data-target="#editUser{{$user->id}}" class="btn btn primary">Edit </a>
										<a class="dropdown-item" href="{{route('users.destroy',$user->id)}}"data-toggle="modal" data-target="#deleteUser{{$user->id}}" class="btn btn primary" >Delete </a>
                    
                    
                    
									</div>
						</div><!-- /.btn-group -->
					</td>
          </tr>
          @include('users.editUser')
          @include('users.viewUser')	
          <!--MODAL TO CONFIRM DELETE-->
<div class="modal fade" id="deleteUser{{$user->id}}">
    <div class="modal-dialog">
      <div class="modal-content bg-normal">
        <div class="modal-header">
          <h4 class="modal-title">Are you sure you want to delete this User? </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
            <form method="post" action="{{ route('users.destroy',$user->id)}}">
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

				</tbody>
				<tfoot>
                  <tr>
                    <th>User ID</th>
                    <th>Profile Photo</th>
                    <th>First Name</th>
                    <th>Last Name</th>
					<th>Phone Number</th>
                    <th>Email</th>
					<th>Role</th>
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
$(document).ready(function () {
  bsCustomFileInput.init();

  
});


$(function () {
    $("#example1").DataTable({
      "responsive": true,
      "autoWidth": false,
    });
    $('#users').DataTable({
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
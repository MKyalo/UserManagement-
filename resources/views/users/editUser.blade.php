 <div class="modal fade" id="editUser{{$user->id}}">

<div class="modal-dialog">
<div class="modal-content">
<style>
.modal-header{
background-color:#001f3f ;
}
.modal-title{
color: #ffffff  ;
}
</style>
<div class="modal-header">
<h4 class="modal-title "><i class="nav-icon fas fa-user-edit"></i> Edit User</h4>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
<span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">
	
              
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('users.update',$user->id)}}"  enctype="multipart/form-data">
			  @csrf
			  @method('PUT')
                <div class="card-body">
				<style>
      .image {
        text-align: center;
        display: block;
      }
    </style>
        <div class="image ">
          <img src="{{asset('public/storage/avatars/'.$user->avatar)}}" length="100"width="100" class="img-circle elevation-2" alt="User Image">
        </div>
        <br>
				<div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"  value="{{ $user->first_name }}" placeholder="Enter First Name">
                  </div>
				  <div class="form-group">
                    <label for="lastname">First Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="{{ $user->last_name }}" placeholder="Enter Last Name">
                  </div>
				  
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="{{ $user->email }}" placeholder="Enter email">
                  </div>
				  
				  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="{{ $user->phone_number }}" placeholder="Enter Phone Number">
                  </div>
				  
				   <div class="form-group">
                    <label for="role">Role</label>
					
                    <select class="form-control" id="category_id" name="role"  placeholder="">
                    <option value="">Select Role</option> 
                        
                            <option value="Admin">Admin</option>
                            <option value="Sales">Sales</option>
                            <option value="User">User</option>
                            
                        
                </select>
                  </div>
				  
                  
				  
                  <div class="form-group">
                    <label for="avatar">Choose new Profile Photo</label>
                    <div class="input-group">
                      <div class="custom-file">
                        <input type="file" class="custom-file-input" id="avatar" name="avatar">
                        <label class="custom-file-label" for="avatar">Choose file</label>
                      </div>
                      <div class="input-group-append">
                        <span class="input-group-text" id="">Upload</span>
                      </div>
                    </div>
                  </div>
                 
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
				  
                </div>
             
           
</div><!-- /.modal-body -->
<div class="modal-footer justify-content-between">
              <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
              <button type="submit" class="btn btn-outline-dark">Save changes</button>
 </div>
  </form>
</div><!-- /.modal-content -->
</div><!-- /.modal-dialog -->
</div> <!-- /.modal-fade -->
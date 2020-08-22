@extends('layouts.app')

@section('content')
<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark"><i class="fas fa-users"></i>  Add New Supplier </h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item"><a href="{{route('suppliers.index')}}">Suppliers</a></li>
              <li class="breadcrumb-item active">Add Supplier</li>
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
	<div class="row justify-content-center ">
    	
		<!--SUPPLIER TABLE TABLE-->
		<div class="col-md-6 ">
		    
        <div class="card card-success">
                      <div class="card-header">
                        <h3 class="card-title"><i class="fas fa-user-plus"></i>   Add User</h3>
                      </div>
                      <!-- /.card-header -->
                      <!-- form start -->
                      <form role="form" method="POST" action="{{route('suppliers.store')}}"  enctype="multipart/form-data">
                @csrf
            <div class="card-body">
                <div class="form-group">
                  <label >Company Name</label>
                  <input type="text" class="form-control" id="company_name" name="company_name"  value="{{ old('company_name') }}" placeholder="Enter Company Name">
                </div>

                <div class="form-group">
                  <label >Company Phone Number</label>
                  <input type="text" class="form-control" id="company_phone" name="company_phone"  value="{{ old('company_phone') }}" placeholder="Enter Phone Number">
                </div>

                <div class="form-group">
                  <label for="email">Company Email address</label>
                  <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" placeholder="Enter email">
                </div>

                <div class="form-group">
                  <label >Postal Address</label>
                  <input type="text" class="form-control" id="address" name="address"  value="{{ old('address') }}" placeholder="Enter Postal Address">
                </div>

                <div class="form-group">
                  <label >Location</label>
                  <input type="text" class="form-control" id="location" name="location"  value="{{ old('location') }}" placeholder="Enter Location">
                </div>
                

                <div class="form-group">
                  <label >Contact Person</label>
                  <input type="text" class="form-control" id="contact_person" name="contact_person"  value="{{ old('contact_person') }}" placeholder="Enter Contact Person">
                </div>

                <div class="form-group">
                  <label >Contact Person's Phone</label>
                  <input type="text" class="form-control" id="contact_phone" name="contact_phone"  value="{{ old('contact_phone') }}" placeholder="Enter Contact Person's Phone">
                </div>

                <div class="form-group">
                  <label for="image">Supplier Photo</label>
                  <div class="input-group">
                    <div class="custom-file">
                      <input type="file" class="custom-file-input" id="image" name="image">
                      <label class="custom-file-label" for="image">Choose file</label>
                    </div>
                    <div class="input-group-append">
                      <span class="input-group-text" id="">Upload</span>
                    </div>
                  </div>
                </div>
                        
          </div>
          <!-- /.card-body -->

              <div class="card-footer">
                <button type="submit" class="btn btn-primary">Save</button>
              </div>
            </form>
          </div><!-- /.card-success -->
     </div><!-- /.col-md12 -->
  </div><!-- /.row -->
  </div>
  <!-- /.content-wrapper -->
    </div>
  <!-- /.content -->
  </section>

@endsection
@section('scripts')
 
 <script type="text/javascript">
$(document).ready(function () {
  bsCustomFileInput.init();

  
});
</script>
@endsection
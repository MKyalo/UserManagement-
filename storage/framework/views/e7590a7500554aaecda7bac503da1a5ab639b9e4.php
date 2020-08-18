

<?php $__env->startSection('content'); ?>
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
		
			<?php echo $__env->make('users.addUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
			
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
                  <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
				  <tr>
				 
          <input type="hidden" class="delUser_id" value="<?php echo e($user->id); ?>">
                    <td><?php echo e($user->id); ?></td>
                    <td><img class="table-avatar"
                       src="<?php echo e(asset('public/storage/avatars/'.$user->avatar)); ?>" height="40" width="40"
                       alt="User profile picture"> </td>
                    <td><?php echo e($user->first_name); ?></td>
                    <td> <?php echo e($user->last_name); ?></td>
                    <td><?php echo e($user->phone_number); ?></td>
					<td><?php echo e($user->email); ?></td>
					<td><?php echo e($user->role); ?></td>
					<td><div class="btn-group">
								<button type="button" class="btn btn-info dropdown-toggle dropdown-icon" data-toggle="dropdown">Action </button>
									<div class="dropdown-menu">
										<a class="dropdown-item" href="<?php echo e(route('users.show',$user->id )); ?>" class="btn btn primary">View </a>
										<a class="dropdown-item" href=" <?php echo e(route('users.edit',$user->id)); ?>"data-toggle="modal" data-target="#editUser<?php echo e($user->id); ?>" class="btn btn primary">Edit </a>
										<a class="dropdown-item" href="<?php echo e(route('users.destroy',$user->id)); ?>"data-toggle="modal" data-target="#deleteUser<?php echo e($user->id); ?>" class="btn btn primary" >Delete </a>
                    
                    
                    
									</div>
						</div><!-- /.btn-group -->
					</td>
          </tr>
				  <?php echo $__env->make('users.editUser', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>	
          <!--MODAL TO CONFIRM DELETE-->
<div class="modal fade" id="deleteUser<?php echo e($user->id); ?>">
    <div class="modal-dialog">
      <div class="modal-content bg-normal">
        <div class="modal-header">
          <h4 class="modal-title">Are you sure you want to delete this User? </h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        </div>
            <form method="post" action="<?php echo e(route('users.destroy',$user->id)); ?>">
                <?php echo method_field('DELETE'); ?>
                <?php echo csrf_field(); ?>

              <div class="modal-footer justify-content-between">
                  <button type="button" class="btn btn-outline-dark" data-dismiss="modal">NO</button>
                    <button type="submit" class="btn btn-outline-dark">YES</button>
              </div>
            </form>
          </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
      </div><!-- /.modal -->
<!-- /. MODAL TO CONFIRM DELETE -->
				  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

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

 <?php $__env->stopSection(); ?>
 <?php $__env->startSection('scripts'); ?>
 
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

 <?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\xampp\htdocs\rbc\resources\views/users/index.blade.php ENDPATH**/ ?>
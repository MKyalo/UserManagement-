<div class="card card-success">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-user-plus"></i>   Add User</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="<?php echo e(route('users.store')); ?>"  enctype="multipart/form-data">
			  <?php echo csrf_field(); ?>
                <div class="card-body">
				<div class="form-group">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" id="first_name" name="first_name"  value="<?php echo e(old('first_name')); ?>" placeholder="Enter First Name">
                  </div>
				  <div class="form-group">
                    <label for="lastname">First Name</label>
                    <input type="text" class="form-control" id="last_name" name="last_name" value="<?php echo e(old('last_name')); ?>" placeholder="Enter Last Name">
                  </div>
				  
                  <div class="form-group">
                    <label for="email">Email address</label>
                    <input type="email" class="form-control" id="email" name="email" value="<?php echo e(old('email')); ?>" placeholder="Enter email">
                  </div>
				  
				  <div class="form-group">
                    <label for="phone">Phone Number</label>
                    <input type="text" class="form-control" id="phone_number" name="phone_number" value="<?php echo e(old('phone_number')); ?>" placeholder="Enter Phone Number">
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
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" placeholder="Password" required autocomplete="new-password">
                  </div>
				  
				  <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password-confirm" name="password" name="password_confirmation" placeholder="Retype password" required autocomplete="new-password">
                  </div>
				  
                  <div class="form-group">
                    <label for="avatar">Profile Photo</label>
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
              </form>
            </div>
            <!-- /.card --><?php /**PATH E:\xampp\htdocs\rbc\resources\views/users/addUser.blade.php ENDPATH**/ ?>
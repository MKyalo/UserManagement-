          <div class="card card-secondary">
              <div class="card-header">
                <h3 class="card-title"><i class="fas fa-folder-plus"></i>   Add Category</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form role="form" method="POST" action="{{route('categories.store')}}" >
			            @csrf
                <div class="card-body">
                    <div class="form-group">
                        <label >Category Name</label>
                        <input type="text" class="form-control" id="category_name" name="category_name"  value="{{ old('category_name') }}" placeholder="Enter Category Name">
                    </div>
                  <div class="form-group">
                      <label>Description</label>
                      <textarea class="form-control" rows="3" id="description" name="description" value="{{ old('description') }}" placeholder="Enter Short Description"></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
          </div>
           <!-- /.card -->
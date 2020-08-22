<div class="modal fade" id="editCategory{{$cat->id}}">

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
                <h4 class="modal-title "><i class="nav-icon fas fa-folder-plus"></i> Edit Category</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                
                
                    <!-- form start -->
                <form role="form" method="POST" action="{{route('categories.update',$cat->id)}}" >
                    @csrf
                    @method('PUT')
                        <div class="form-group">
                            <label >Category Name</label>
                            <input type="text" class="form-control" id="category_name" name="category_name"  value="{{ $cat->category_name }}" placeholder="Enter Category Name">
                        </div>
                    <div class="form-group">
                        <label>Description</label>
                        <textarea class="form-control" rows="3" id="description" name="description" value="{{ $cat->description }}" >{{ $cat->description }}</textarea>
                    </div>

                        
                    
                        <div class="modal-footer justify-content-between">
                                    <button type="button" class="btn btn-outline-dark" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-outline-dark">Save changes</button>
                        </div>
                </form>
            </div><!-- /.modal-body -->
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div> <!-- /.modal-fade -->
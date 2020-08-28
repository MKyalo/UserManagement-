<div class="modal fade" id="viewUser{{$user->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Default Modal</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
            <div class="modal-body">
                <!--User Widget-->
                
              
                    <!-- Widget: user widget style 1 -->
                    <div class="card card-widget widget-user">
                        <!-- Add the bg color to the header using any of the bg-* classes -->
                        <div class="widget-user-header bg-info">
                            <h3 class="widget-user-username">{{$user->first_name}} {{$user->last_name}}</h3>
                                                    
                        </div>
                        <div class="widget-user-image">
                            <img class="img-circle elevation-2" src="{{asset('public/storage/avatars/'.$user->avatar)}}" alt="User Avatar">
                        </div>
                        <div class="card-footer">
                            <div class="row">
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">Email: </h5>
                                        <span class="description-text">{{$user->email}}</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4 border-right">
                                    <div class="description-block">
                                        <h5 class="description-header">Phone Number</h5>
                                        <span class="description-text">{{$user->phone_number}}</span>
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                                <div class="col-sm-4">
                                    <div class="description-block">
                                        <h5 class="description-header">ROLE</h5>
                                        @if ($user->role == 'Admin')
                                        <span class="description-text"><span class=" badge badge-success">Administrator</span></span>
                                        
                                        @elseif ($user->role== 'Sales')
                                        <span class="description-text"><span class=" badge badge-info">Sales Representative</span></span>
                                        
                                        @elseif ($user->role== 'User')
                                        <span class="description-text"><span class=" badge badge-danger">Normal User</span></span>
                                        @endif
                                        
                                    </div>
                                    <!-- /.description-block -->
                                </div>
                                <!-- /.col -->
                            </div>
                            <!-- /.row -->
                        </div>
                    </div>
                    <!-- /.widget-user -->
                
                <!--./User Widget-->
            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary" data-dismiss="modal">Ok</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
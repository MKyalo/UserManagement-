<!--MODAL TO DISPLAY CATEGORY INFO-->
<div class="modal fade" id="categoryInfo{{$cat->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Category Name:<p style="color:  #00cc00;"> {{$cat->category_name}}</p></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">

                <div class="card bg-light">
                    <div class="card-header text-muted border-bottom-0">
                        Digital Strategist
                    </div>
                    <div class="card-body pt-0">
                        <div class="row">
                            <!--Category Info-->
                        </div>
                    </div>
                    <div class="card-footer">
                        <div class="text-right">

                            <a href="#" class="btn btn-sm btn-primary">
                                <i class="fas fa-print"></i> Print
                            </a>
                        </div>
                    </div>
                </div>

            </div>
            <div class="modal-footer justify-content-between">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                <button type="button" class="btn btn-primary">Save changes</button>
            </div>
        </div>
        <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
</div>
<!-- /.modal -->

<!--END OF MODAL TO DISPLAY SUPPLIER INFO-->
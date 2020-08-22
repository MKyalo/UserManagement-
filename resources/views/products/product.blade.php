

    <div class="modal fade" id="viewProduct{{$prod->id}}">
        <div class="modal-dialog ">
          <div class="modal-content">
            <div class="modal-header">
              <h4 class="modal-title">Product Info.</h4>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
            <!------------------------------>
            <div class="col-md-12 justify-content-center">
              <h3 class="text-primary"></i> {{$prod->product_name}} </h3>
              <img class="img-fluid" src="{{asset('public/storage/products/'.$prod->product_image)}}" height="150" width="150" alt="Product Image">
              <b class="d-block">Prduct Description</b>
              <p class="text-muted">{{$prod->description}}</p>
              <br>
              <div class="text-muted">
              
                <p class="text-sm">Product Category
                  <b class="d-block">{{$prod->category->category_name}}</b>
                </p>
                <p class="text-sm">Supplied By:
                  <b class="d-block">{{$prod->supplier->company_name}}</b>
                </p>
              </div>

              <h5 class="mt-5 text-muted">Profit Margins</h5>
              <ul class="list-unstyled">
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i> Purchase Price: Ksh {{$prod->purchase_price}}</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-pdf"></i> Retail Price: Ksh {{$prod->retail_price}}</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-envelope"></i> Profit Nargin: Ksh {{$prod->profit_margin}}</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-image "></i> Total Products at Hand: {{$prod->quantity}}</a>
                </li>
                <li>
                  <a href="" class="btn-link text-secondary"><i class="far fa-fw fa-file-word"></i>Total Profit Margin: {{ $prod->profit_margin * $prod->quantity }}</a>
                </li>
              </ul>
              <div class="text-center mt-5 mb-3">
                <a href="#" class="btn btn-sm btn-primary">Add files</a>
                <a href="#" class="btn btn-sm btn-warning">Report contact</a>
              </div>
            </div>
        <!------------------------------------------------------------->
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
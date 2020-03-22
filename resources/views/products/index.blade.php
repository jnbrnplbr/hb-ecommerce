@extends('layout.master')
@section('link')
<style>
.modal-lg{
  max-width: 50% !important;
}
</style>
@endsection



@section('content')

  @foreach($watches as $watch)
    <div id="product" class="col-3 form-group border text-center">
        
            <a> 
              <img id="img{{$watch->id}}" src="{{$watch->image->img }}" class="img-fluid rounded">
              <h6><a  href="#" class="form-control2">{{ $watch->detail->name }}</a></h6>
            </a>
          
          <div class="item_add">
            <span class="item_price">
              <h6>₱ {{ number_format($watch->price->amount,'2','.',',')}}</h6>
              <p class="small">Stock: {{ $watch->quantity->quantity }}</p>
            </span>
          </div>  
        
    </div>


      <div class="modal bd-example-modal-lg fade" id="product{{ $watch->id }}">
      <div class="modal-dialog modal-lg">
        <div class="modal-content">
          <div class="modal-header">  
            <h4 class="modal-title">Product Information</h4>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">
            <div class="card card-solid">
              <div class="card-body">
                <div class="row">
                  <div class="col-12 col-sm-6">
                    <h3 class="d-inline-block d-sm-none"></h3>
                    <div class="col-12">
                      <img src="{{$watch->image->img }}" class="product-image" alt="Product Image">
                    </div>
                    {{-- <div class="col-12 product-image-thumbs">
                      <div class="product-image-thumb active"><img src="/images/w5.jpg" alt="Product Image"></div>
                      <div class="product-image-thumb"><img src="/images/w5.jpg" alt="Product Image"></div>
                      <div class="product-image-thumb"><img src="/images/w5.jpg" alt="Product Image"></div>
                      <div class="product-image-thumb"><img src="/images/w5.jpg" alt="Product Image"></div>
                      <div class="product-image-thumb"><img src="/images/w5.jpg" alt="Product Image"></div>
                    </div> --}}
                  </div>
                  <div class="col-12 col-sm-6">
                    <h5 class="my-3">{{ $watch->detail->name }}</h5>
                    <p class="small">Like all models in the prestigious Day-Date range, the Oyster Perpetual Day-Date 36  is made only of precious metals.</p>
      
                    <hr>
                    <div class="bg-green py-2 px-3 mt-4">
                      @php setlocale(LC_MONETARY,'en_US') @endphp
                      <h5 class="mb-0">
                        ₱ {{ number_format($watch->price->amount,'2','.',',')}}
                      </h5>
                      <h6 class="mt-0">
                        <small>Stock : {{ $watch->quantity->quantity }}</small>
                      </h6>
                    </div>
      
                    <div class="mt-4">
                      <div class="btn btn-primary btn-sm btn-flat">
                        <i class="fas fa-cart-plus fa-sm mr-2"></i> 
                        Add to Cart
                      </div>
      
                      <div class="btn btn-default btn-sm btn-flat">
                        <i class="fas fa-heart fa-sm mr-2"></i> 
                        Add to Wishlist
                      </div>
                    </div>
    
      
                  </div>
                </div>
                <div class="row mt-4">
                  <nav class="w-100">
                    <div class="nav nav-tabs" id="product-tab" role="tablist">
                      <a class="nav-item nav-link active small" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Specification</a>
                      <a class="nav-item nav-link small" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
                      <a class="nav-item nav-link small" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
                    </div>
                  </nav>
                  <div class="tab-content p-3" id="nav-tabContent">
                    <div class="tab-pane fade show active small" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"><p>{{$watch->specification->detail}}</p></div>
                    <div class="tab-pane fade small" id="product-comments" role="tabpanel" aria-labelledby="product-comments-tab">No Comment Found</div>
                    <div class="tab-pane fade small" id="product-rating" role="tabpanel" aria-labelledby="product-rating-tab">No Rating Found</div>
                  </div>
                </div>
              </div>
              <!-- /.card-body -->
            </div>
          </div>
          <div class="modal-footer justify-content-between">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            {{-- <button type="button" class="btn btn-primary">Save changes</button> --}}
          </div>
        </div>
        <!-- /.modal-content -->
      </div>
      <!-- /.modal-dialog -->
    </div>

    @endforeach




@endsection



  



@section('jslink')

<?= '<script type="text/javascript">' ?>  
@php 
  $count = 1;
  for($x=0; $x<$actions; $x++){
    echo '
    $(document).ready(function(){
      $("#img'.$count.'").hover(function(){
        $(\'#product'.$count++.'\').modal({
          show:true
        });
      });
    });';
  }
@endphp

<?= '</script>' ?>


{{-- 
<script type="text/javascript">
  $(document).ready(function(){
    $("img").hover(function(){
      $('.modal').modal({
        show:true
      });
    });
  });
</script> --}}
@endsection

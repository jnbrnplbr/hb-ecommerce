@extends('layout.master')
@section('content')

   <div class="col-md-3"></div>
   <div class="col-md-6">
    <form action="/models/{{ $watch->id }}" method="post">
        @csrf
        @method('put') 
        @include('inc.messages')

        <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
        <div class="card card-secondary">
        
                <div class="card-header">
                    <h3 class="card-title">Update Watch Model</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
            
                <div class="card-body" style="display: block;">
                    <div class="form-group">
                        <label>Brand</label>
                        <select name="brand" class="custom-select">
                                <option selected>{{ $watch->brand->name }} </option>
                            @foreach($brands as $brand)
                                @if($brand->name == $watch->brand->name)
                                    <?php continue; ?>
                                @endif
                                <option>{{ $brand->name }} </option>
                            @endforeach
                        </select>
                      </div>
        
                    <div class="form-group">
                        <label for="inputName">Name</label>
                        <input type="text" value="{{ $watch->detail->name }}" name="name"  id="inputName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Price</label>
                        <input type="text" value="{{ $watch->price->amount }}" name="price"  id="inputName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Quantity</label>
                        <input type="text" value="{{ $watch->quantity->quantity }}" name="quantity"  id="inputName" class="form-control">
                    </div>

                    <div class="col-12">
                        <input type="submit" value="Update" class="btn btn-success">
                    </div>
                </div><!-- /.card-body -->
        </div><!-- /.card -->
        </form>
    </div>
    <div class="col-md-3"></div>
    
@endsection


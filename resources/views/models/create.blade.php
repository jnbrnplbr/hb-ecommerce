@extends('layout.master')
@section('content')

   <div class="col-md-3"></div>
   <div class="col-md-6">
    <form action="/models" method="post" enctype="multipart/form-data">

        @csrf 
        @include('inc.messages')
        <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
        <div class="card card-secondary">
        
                <div class="card-header">
                    <h3 class="card-title">New Model</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
            
                <div class="card-body" style="display: block;">
                    <div class="form-group">
                        <label>Brand</label>
                        <select name="brand" class="custom-select">
                            @foreach($brands as $brand)
                                <option>{{ $brand->name }} </option>
                            @endforeach
                        </select>
                      </div>
        
                    <div class="form-group">
                            <label for="inputName">Name</label>
                            <input type="text" value="{{ old('name')}}" name="name"  id="inputName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Price</label>
                        <input type="text" value="{{ old('price')}}" name="price"  id="inputName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label for="inputName">Quantity</label>
                        <input type="text" value="{{ old('quantity')}}" name="quantity"  id="inputName" class="form-control">
                    </div>

                    <div class="form-group">
                        <label>Sub-Title</label>
                        <textarea class="form-control" name="sub" rows="3" value="{{ old('sub') }}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Specification</label>
                        <textarea class="form-control" name="specification" rows="3" value="{{ old('specification') }}"></textarea>
                    </div>

                    <div class="form-group">
                        <div class="custom-file">
                            <input type="file" name="image" class="custom-file-input" id="customFile">
                            <label class="custom-file-label" for="customFile">Choose file</label>
                        </div>
                    </div>

                    <div class="col-12">
                        <input type="submit" value="Add" class="btn btn-success">
                    </div>
                </div><!-- /.card-body -->
        </div><!-- /.card -->
        </form>
    </div>
    <div class="col-md-3"></div>
    
@endsection

@section('jslink')

<script src="/plugins/bs-custom-file-input/bs-custom-file-input.js"></script>
<script>
    $(document).ready(function () {
        bsCustomFileInput.init();
    });
</script>
@endsection
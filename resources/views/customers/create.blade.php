@extends('layout.master')
@section('content')

   <div class="col-md-3"></div>
   <div class="col-md-6">
    <form action="/buildings" method="post">

        @csrf 
        @include('inc.messages')
        <div id="toastsContainerTopRight" class="toasts-top-right fixed"></div>
        <div class="card card-secondary">
                <div class="card-header">
                    <h3 class="card-title">New Building</h3>

                    <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
                        <i class="fas fa-minus"></i></button>
                    </div>
                </div>
            
                <div class="card-body" style="display: block;">
                    <div class="form-group">
                            <label for="inputName">Building</label>
                            <input type="text" value="{{ old('building')}}" name="building"  id="inputName" class="form-control">
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


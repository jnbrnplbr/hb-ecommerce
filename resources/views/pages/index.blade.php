@extends('layout.master')

@section('content')

  @include('inc.messages')

    <section class="col-lg-12 connectedSortable">

    @if(Auth::user()->getCurrentRole() != 'customer')  
        <p><div class="row">
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-info"><i class="far fa-envelope"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Customer</span>
                  <span class="info-box-number">1,410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-success"><i class="far fa-flag"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Pending</span>
                  <span class="info-box-number">410</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-warning"><i class="far fa-copy"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Orders</span>
                  <span class="info-box-number">20</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
            <div class="col-md-3 col-sm-6 col-12">
              <div class="info-box">
                <span class="info-box-icon bg-danger"><i class="far fa-star"></i></span>
  
                <div class="info-box-content">
                  <span class="info-box-text">Employee</span>
                  <span class="info-box-number">20</span>
                </div>
                <!-- /.info-box-content -->
              </div>
              <!-- /.info-box -->
            </div>
            <!-- /.col -->
          </div></p>
    @else
    <p>
      <div class="row">
          Welcome back! {{ Auth::user()->currentUser() }}
      </div>
    </p>

    @endif    
    </section>
@endsection
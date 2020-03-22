@extends('layout.master')

@section('content')
<div class="col-sm-12">
    <div class="row">
        <div class="col-12">
          <form method="POST">
          @csrf
          @method('delete')
          @include('inc.messages')

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Watch Model List</h3>
              <div class="col-3">
              </div>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>              
                    <a href="/models/create" type="button" class="btn btn-block btn-default pull-right">Create</a>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 400px;">
              <table class="table table-head-fixed table-bordered text-center table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Brand</th>
                    <th>Price</th>
                    <th>Quantity</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
              </thead>
                <tbody>
                  @foreach($watches as $watch)
                    <tr role="row" class="odd">
                        <td class="sorting_1">{{ $watch->countRow() }}</td>
                        <td>{{ $watch->detail->name }}</td>
                        <td>{{ $watch->brand->name }}</td>
                        <td>{{ $watch->price->amount }}</td>
                        <td>{{ $watch->quantity->quantity }}</td>
                        <td><img src="{{ $watch->image->img  }}" style="width:50px;height:50px;"></td>
                        <td class="project-actions">
                            <a class="btn btn-info btn-sm" style="font-size:10px;" href="/models/{{ $watch->id }}/edit">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Edit
                            </a>
                            <button class="btn btn-danger btn-sm" style="font-size:10px;" formaction="/models/{{ $watch->id }}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                          </button>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
              </table>
            </div>
            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
    
    </div>
@endsection

@section('jslink')
<!-- page script -->
<script>
    $(function () {
      $("#example1").DataTable();
      $('#example2').DataTable({
        "paging": true,
        "lengthChange": false,
        "searching": false,
        "ordering": true,
        "info": true,
        "autoWidth": false,
      });
    });
</script>
@endsection
@extends('layout.master')

@section('content')
<div class="col-sm-12">
    <div class="row">
        <div class="col-12">
          <form method="POST">
          @csrf
          @method('put')
          @include('inc.messages')

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Pending Customer List</h3>
              <div class="col-3">
              </div>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>              
                    {{-- <a href="/buildings/create" type="button" class="btn btn-block btn-default pull-right">Create</a> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 200px;">
              <table class="table table-head-fixed table-bordered text-center table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($pending as $pending)
                    <tr role="row" class="odd">
                      <td class="sorting_1">{{ $user->countRow() }}</td>
                      <td>{{ $pending->name->first.' '.$pending->name->last }}</td>
                      <td>{{ $pending->email}}</td>
                        <td class="project-actions">
                        <button class="btn btn-info btn-sm" style="font-size:10px;" formaction="/customers/{{ $pending->id }}/approve">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Approve
                            </button>
                          <button class="btn btn-danger btn-sm" style="font-size:10px;" formaction="/customers/{{ $pending->id }}/deny">
                                <i class="fas fa-trash">
                                </i>
                                Deny
                            </button]>
                        </td>
                    </tr>
                  @endforeach
                </tbody>
              </table>

            </form>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->

          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Approved Customer List</h3>
              <div class="col-3">
              </div>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>              
                    {{-- <a href="/buildings/create" type="button" class="btn btn-block btn-default pull-right">Create</a> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 200px;">
              <table class="table table-head-fixed table-bordered text-center table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($approve as $approve)

                    <tr role="row" class="odd">
                      <td class="sorting_1">{{ $customer->countRow() }}</td>
                      <td>{{ $approve->name->first.' '.$approve->name->last }}</td>
                      <td>{{ $approve->email}}</td>
                        <td class="project-actions">
                            <button class="btn btn-info btn-sm" style="font-size:10px;" formaction="/customers/{{ $approve->id }}">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Show
                            </button>
                              <button class="btn btn-danger btn-sm" style="font-size:10px;" formaction="/customers/{{ $approve->id }}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button]>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>

            </form>
            <!-- /.card-body -->
          </div>


          <div class="card">
            <div class="card-header">
              <h3 class="card-title">Denied Customer List</h3>
              <div class="col-3">
              </div>
                <div class="card-tools">
                <div class="input-group input-group-sm" style="width: 300px;">
                  <input type="text" name="table_search" class="form-control float-right" placeholder="Search">
                  <div class="input-group-append">
                    <button type="submit" class="btn btn-default"><i class="fas fa-search"></i></button>              
                    {{-- <a href="/buildings/create" type="button" class="btn btn-block btn-default pull-right">Create</a> --}}
                  </div>
                </div>
              </div>
            </div>
            <!-- /.card-header -->
            <div class="card-body table-responsive p-0" style="height: 200px;">
              <table class="table table-head-fixed table-bordered text-center table-striped">
                <thead>
                  <tr>
                    <th>No.</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($denied as $denied)

                    <tr role="row" class="odd">
                      <td class="sorting_1">{{ $contact->countRow() }}</td>
                      <td>{{ $denied->name->first.' '.$denied->name->last }}</td>
                      <td>{{ $denied->email}}</td>
                        <td class="project-actions">
                            <button class="btn btn-info btn-sm" style="font-size:10px;" formaction="/customers/{{ $denied->id }}/approve">
                                <i class="fas fa-pencil-alt">
                                </i>
                                Approve
                            </button>
                            <button class="btn btn-danger btn-sm" style="font-size:10px;" formaction="/customers/{{ $denied->id }}">
                                <i class="fas fa-trash">
                                </i>
                                Delete
                            </button>
                        </td>
                    </tr>
                    @endforeach
                    
                </tbody>
              </table>

            </form>
            <!-- /.card-body -->
          </div>

        </div>
      </div>
    
    </div>
@endsection

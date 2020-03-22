          
@yield('header')


<!-- Content Header (Page header) -->
<div class="content-header">
<div class="container-fluid">
<div class="row mb-2">
    <div class="col-sm-6">
    <h1 class="m-0 text-dark">{{ $title }}</h1>
    </div><!-- /.col -->
    <div class="col-sm-6">
    <ol class="breadcrumb float-sm-right">
        @if($title === 'Dashboard' || $title === 'About Us')

    
        @else
            <li class="breadcrumb-item"><a href="/dashboard">Dashboard</a></li>    
        @endif
            <li class="breadcrumb-item active">{{ $title }}</li>
        
    </ol>
    </div><!-- /.col -->
</div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->


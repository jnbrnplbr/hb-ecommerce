<!DOCTYPE html>
<html>
<head>
    @include('layout.link')
</head>
<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">
            @include('layout.navbar')
            @include('layout.side')
            
        <div class="content-wrapper">
            @include('layout.header')
            @include('layout.content')
        </div>

        @include('layout.footer')
        
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
    </div><!-- ./wrapper -->
</body>
    @include('layout.jslink')
</html>
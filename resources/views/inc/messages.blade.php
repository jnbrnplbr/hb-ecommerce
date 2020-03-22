@if(session('specialerror'))
<div class="alert alert-danger">
    {{session('specialerror')}}
</div>
@else 
 

    @if(count($errors) > 0)

    <div class="alert alert-danger">
        @foreach($errors->all() as $error)
            {{$error}}<br>
        @endforeach
    </div>

    @endif

    @if(session('success'))
        <div class="alert alert-success">
            {{session('success')}}
        </div>

    @endif

    @if(session('error'))
        <div class="alert alert-danger">
            {{session('error')}}
        </div>
    @endif

@endif
{{-- <script type="text/javascript">
  $(window).on("load",function(){
  $("#showInventory").modal("show");
  });
</script> --}}

{{-- calling modal --}}
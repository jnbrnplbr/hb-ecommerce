@extends('layouts.app') {{-- calling the file layout/app.blade.php --}}

@section('content') {{--calling the yield('content') at layout/app.blade.php--}}
    <div class="jumbotron text-center">
        <h1>{{$title}}</h1>
        @if(count($services) > 0)
            <ul>
                @foreach($services as $service)            
                        <li class="list-group-item">{{$service}}</li>            
                @endforeach
            </ul>
        @endif
    </div>
@endsection

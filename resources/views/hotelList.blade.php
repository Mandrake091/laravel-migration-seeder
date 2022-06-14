 @extends('layouts.default')
@section('pageTitle', 'Hotel - List')
    
    @section('mainContent')
        <h1 class="text-center">Hotels List<i class="fa-solid fa-home"></i></h1>
        <div class="row">
            @foreach ($hotels as $hotel)

            <div class="col">

            <a href="{{route('detail', $hotel->id)}}">
                {{$hotel->title}}
            </a> 
            </div>
                
            @endforeach
        </div>
    @endsection


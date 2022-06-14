 @extends('layouts.default')
 @section('pageTitle', 'Hotel - List')

 @section('mainContent')
     <h1 class="text-center">Hotels <i class="fa-solid fa-home"></i></h1>
     <div class="container">

   
     <div class="row x-3 gy-3 justify-content-center">
         @foreach ($hotels as $hotel)

             <div class="col-12 col-md-6 col-lg-3 ">
                 <div class="card mx-auto" style="width: 12rem;">
                     <img src="{{$hotel->image_url}}" class="card-img-top" alt="...">
                     <div class="card-body">
                         <h5 class="card-title">{{$hotel->title}}</h5>
                         <p class="card-text">City: {{$hotel->city}}</p>
                     </div>
                     <ul class="list-group list-group-flush">
                         <li class="list-group-item">Price: {{$hotel->price}}€</li>
                         <li class="list-group-item">Square meters: {{$hotel->square_meters}}MQ</li>
                         <li class="list-group-item">Address: {{$hotel->address}}</li>
                     </ul>
                     <div class="card-body text-center">
                         <a href="{{route('detail', $hotel->id)}}" class="card-link">--> More <--</a>
                   
                     </div>
                 </div>
             </div> 

            @endforeach 
        </div>
         
     </div>
 @endsection

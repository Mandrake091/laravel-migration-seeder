@extends('layouts.default')
@section('pageTitle', 'Hotels - Home')

@section('mainContent')

    <h1>Details</h1>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="card mx-auto" style="width: 20rem;">
                    <img src="{{ $hotels->image_url }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title">{{ $hotels->title }}</h5>
                        <p class="card-text">City: {{ $hotels->city }}</p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">Price: {{ $hotels->price }}€</li>
                        <li class="list-group-item">Square meters: {{ $hotels->square_meters }}MQ</li>
                        <li class="list-group-item">Address: {{ $hotels->address }}</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>




@endsection

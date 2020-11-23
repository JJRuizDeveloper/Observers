@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>

                <div class="card-body">
                   @foreach($products as $product)
                    <div class="card" style="width: 18rem;">
                        <div class="card-body">
                        <h5 class="card-title">{{$product->name}} ${{$product->price}}</h5>
                        <p class="card-text">{{$product->desc}}</p>
                        <a href="{{route('buy', $product->id)}}" class="btn btn-primary">Buy</a>
                        </div>
                    </div>
                   @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

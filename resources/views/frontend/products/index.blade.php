@extends('layouts.front')

@section('title')
    {{ $category->name }}   
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>{{ $category->name }}</h2>
                    @foreach ($products as $prod)
                        <div class="col-md-3 mb-3">
                            <div class="card h-100">
                                <img class="card-img-top" src="{{ asset('assets/uploads/products'.$prod->image) }}" alt="Product image">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-start">{{ $prod->special_price }}</span>
                                        <span class="float-end"> <s>{{ $prod->price }}</s></span>
                                    </div>
                            </div>
                        </div>
                    @endforeach 
            </div>
        </div>
    </div>
@endsection

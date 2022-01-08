@extends('layouts.front')

@section('title', $category->name)

@section('content')

<!------ Breadcrumbs ------>
<div class="py-3 mb-4 shadow-sm bg-secondary border-top">
    <div class="container">
        <a class="link-dark" href="{{ url( 'category/') }}"> Categories</a>  / <a> {{ $category->name}} </a>
    </div>
</div>

<div class="py-5">
    <div class="container">
        <div class="row">
            <h2>{{ $category->name }}</h2>
                @foreach ($products as $prod)
                    <div class="col-md-3 mb-3">
                        <div class="card h-100">
                            <a class="link-dark" href="{{ url('category/'.$category->url.'/'.$prod->url) }}">
                                <img class="card-img-top" src="{{ asset('assets/uploads/products/'.$prod->image) }}" style="height: 18rem;" alt="Product image">
                                    <div class="card-body">
                                        <h5>{{ $prod->name }}</h5>
                                        <span class="float-end"> <s>{{ $prod->original_price }}</s></span>
                                        <span class="float-start">{{ $prod->selling_price }}</span>
                                    </div>
                            </a>
                        </div>
                    </div>
                @endforeach 
        </div>
    </div>
</div>
@endsection

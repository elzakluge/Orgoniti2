@extends('layouts.front')

@section('title', $products->name)

@section('content')

<!------ Breadcrumbs ------>
<div class="py-3 mb-4 shadow-sm bg-secondary border-top">
    <div class="container">
        <h6 class="mb-0">
            <a class="link-dark" href="{{ url( 'category') }}">Categories</a> / 
            <a class="link-dark" href="{{ url( 'category/'.$products->category->url) }}"> {{ $products->category->name}}</a> / 
            <a class="link-dark" href="{{ url( 'category/'.$products->category->url.'/'.$products->url) }}">{{$products->name}}</a>
        </h6>
    </div>
</div>

<div class="container">
    <div class="card shadow product_data">
        <div class="card-body">
            <div class="row">
                <div class="col-md-4 border-right">
                    <img src="{{ asset('assets/uploads/products/'.$products->image) }}" class="w-100" alt="">
                </div>
                <div class="col-md-8">
                    <h2 class="mb-0">
                        {{ $products->name }}
                        @if ($products->popular == '1')
                         <label style="font size: 16px;" class="float-end badge bg-danger popular_tag">Popular</label>
                        @endif
                    </h2>

                    <hr>
                    <label class="me-3">Original Price :<s>EUR {{ $products->original_price }}</s></label>
                    <label class="me-3">Selling Price : EUR {{ $products->selling_price }}</label>
                    <hr>
                    @if ($products->qty > 0)
                        <label class="badge bg-success">In Stock</label>
                        @else 
                        <label class="badge bg-danger">Out Of Stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                        <input type="hidden" value="{{ $products->id }}" class="prod_id">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <button class="input-group-text decriment-btn">-</button>
                                <input type="text" name="quantity" class="form-control qty-input text-center" value="1" />
                                <button class="input-group-text increment-btn">+</button>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br />
                            @if ($products->qty > 0)
                                <button type="button" class="btn btn-primary me-3 addToCartBtn float-start">Add to Cart</button>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <hr>
                <h3>Description</h3>
                <p class="mt-3">
                    {!! $products->description !!}
                </p>
            </div>
        </div>
    </div>
</div>
<script   src="https://code.jquery.com/jquery-3.6.0.min.js"   integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="   crossorigin="anonymous"></script>
<script src="{{ asset('frontend/js/jquery-3.6.0.min.js') }}" defer></script>
<script src="{{ asset('frontend/js/bootstrap.bundle.min.js') }}" defer></script>
@endsection

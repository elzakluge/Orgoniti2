@extends('layouts.front')

@section('title')
    {{ $products->name }}   
@endsection

@section('content')

<!------ Breadcrumbs ------>
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">Collections / {{ $products->category->name}} / {{$products->name}}</h6>
    </div>
</div>

<div class="container">
    <div class="card shadow">
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
                    <label class="me-3">Original Price : <s>Rs {{ $products->price }}</s></label>
                    <label class="me-3">Special Price : <s>Rs {{ $products->special_price }}</s></label>
                    <p class="mt-3">
                        {!! $products->short_description !!}
                    </p>
                    <hr>
                    @if ($products->qty > 0)
                        <label class="badge bg-success">In Stock</label>
                        @else 
                        <label class="badge bg-danger">Out Of Stock</label>
                    @endif
                    <div class="row mt-2">
                        <div class="col-md-2">
                            <label for="Quantity">Quantity</label>
                            <div class="input-group text-center mb-3">
                                <span class="input-group-text">-</span>
                                <input type="text" name="quantity" value="1" class="form-control" />
                                <span class="input-group-text">+</span>
                            </div>
                        </div>
                        <div class="col-md-10">
                            <br />
                            <button type="button" class="btn btn-success me-3 float-start">Add to Wishlist</button>
                            <button type="button" class="btn btn-primary me-3 float-start">Add to Cart</button>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>

@endsection
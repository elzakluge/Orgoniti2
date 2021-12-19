@extends('layouts.front')

@section('title')
        Welcome to Orgoniti
@endsection

@section('content')
@include('layouts.inc.slider')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <h2>Popular products</h2>
                <div class="owl-carousel featured-carousel owl-theme">
                        @foreach ($featured_products as $prod)
                            <div class="item">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{ asset('assets/uploads/products/'.$prod->image) }}" style="height: 20rem;" alt="Product image">
                                        <div class="card-body">
                                            <h5>{{ $prod->name }}</h5>
                                            <span class="float-start"><s>{{ $prod->original_price }}</s></span>
                                            <span class="float-end"> {{ $prod->selling_price }}</span>
                                        </div>
                                </div>
                            </div>
                        @endforeach 
                </div>
                
            </div>
        </div>
    </div>

@endsection

@section('scripts')
<script>
    $('.featured-carousel').owlCarousel({
    loop:true,
    margin:10,
    nav:true,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:4
        }
    }
})
</script>
@endsection
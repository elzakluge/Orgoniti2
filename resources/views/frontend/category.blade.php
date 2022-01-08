@extends('layouts.front')

@section('title')
        Category
@endsection

@section('content')

    <!------ Breadcrumbs ------>
    <div class="py-3 mb-4 shadow-sm bg-secondary border-top">
        <div class="container">
            <h6 class="mb-0">
                <a class="link-dark" href="{{ url( '/') }}">Home</a> / 
                <a class="link-dark" href="{{ url( 'category/') }}"> Categories</a> 
            </h6>
        </div>
    </div>

    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All categories</h2>
                    <div class="row">
                        @foreach ($category as $cate)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <a class="link-dark" href="{{ url('category/'.$cate->url) }}">
                                        <img class="card-img-top" src="{{ asset('assets/uploads/category/'.$cate->image) }}" style="height: 20rem;" alt="Category image">
                                            <div class="card-body">
                                                <h5>{{ $cate->name }}</h5>
                                                <p>{{ $cate->description }}</p>
                                            </div>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
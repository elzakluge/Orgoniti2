@extends('layouts.front')

@section('title')
        Category
@endsection

@section('content')
    <div class="py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h2>All categories</h2>
                    <div class="row">
                        @foreach ($category as $cate)
                            <div class="col-md-4 mb-3">
                                <div class="card h-100">
                                    <img class="card-img-top" src="{{ asset('assets/uploads/category/'.$cate->image) }}" style="height: 20rem;" alt="Category image">
                                        <div class="card-body ">
                                            <h5>{{ $cate->name }}</h5>
                                            <p>{{ $cate->description }}</p>
                                        </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
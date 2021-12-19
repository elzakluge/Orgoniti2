@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
        <form action="{{ url('update-product/'.$products->id)}}" method="POST" enctype="multipart/form-data">
            @method('PUT')
            @csrf
                <div class="row">
                    <div class="com-md-12">
                        <select class="form-select" name="category_id">
                            <option selected>{{ $products->category_id }}</option>
                          </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                    <input type="text" class="form-control" value="{{ $products->name }}" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">URL</label>
                        <input type="text" class="form-control" value="{{ $products->url }}" name="url">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Short Description</label>
                        <textarea name="short_description" rows="3" class="form-control">{{ $products->short_description }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control">{{ $products->description }}</textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Original Price</label>
                        <input type="number" class="form-control" value="{{ $products->original_price }}" name="original_price">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Selling Price</label>
                        <input type="number" class="form-control" value="{{ $products->selling_price }}" name="selling_price">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" value="{{ $products->qty }}" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" {{ $products->status == "1" ? 'checked':'' }} name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" {{ $products->popular == "1" ? 'checked':'' }}  name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" value="{{ $products->meta_title }}" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control">{{ $products->meta_keywords }}</textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control">{{ $products->meta_description }}</textarea>
                    </div>

                    @if ($products->image)
                        <img src="{{ asset('assets/uploads/products/'.$products->image) }}" alt="Product image">
                    @endif
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Update</button>
                    </div>

                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
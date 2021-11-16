@extends('layouts.admin')

@section('content')
    <div class="card">
        <div class="card-header">
            <h4>Add Product</h4>
        </div>
        <div class="card-body">
            <form action="{{ url('insert-product')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="row">
                    <div class="com-md-12">
                        <select class="form-select" name="category_id">
                            <option selected>Select a Category</option>
                            @foreach ($category as $item)
                                <option value="{{ $item ->id }}">{{ $item ->name }}</option>
                            @endforeach
                            </select>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Name</label>
                        <input type="text" class="form-control" name="name">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">URL</label>
                        <input type="text" class="form-control" name="url">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Short Description</label>
                        <textarea name="short_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Description</label>
                        <textarea name="description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Price</label>
                        <input type="number" class="form-control" name="price">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Special Price</label>
                        <input type="number" class="form-control" name="special_price">
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="">Quantity</label>
                        <input type="number" class="form-control" name="qty">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Status</label>
                        <input type="checkbox" name="status">
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="">Popular</label>
                        <input type="checkbox" name="popular">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Title</label>
                        <input type="text" name="meta_title" class="form-control">
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Keywords</label>
                        <textarea name="meta_keywords" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12 mb-3">
                        <label for="">Meta Description</label>
                        <textarea name="meta_description" rows="3" class="form-control"></textarea>
                    </div>
                    <div class="col-md-12">
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-12">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection
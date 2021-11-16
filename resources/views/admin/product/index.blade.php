

@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Products page</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Category</th>
                    <th>Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Image</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($products as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->category_id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->description }}</td>
                        <td>{{ $item->price }}</td>
                        <td>
                        <img src="{{ asset('assets/uploads/products/'.$item->image)}}" class="cate-image" alt="Product Image">
                        </td>
                        <td>
                            <a href="{{ url('edit-prod/'.$item->id)}}" class="btn btn-primary btn-sm">Edit</a>
                            <a href="{{ url('delete-product/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection
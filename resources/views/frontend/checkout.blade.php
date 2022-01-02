@extends('layouts.front')

@section('title')
        Checkout
@endsection

<!------ Breadcrumbs ------>
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url( '/') }}">Home</a> / 
            <a href="{{ url( 'checkout/') }}"> Checkout</a> 
        </h6>
    </div>
</div>

@section('content')
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-7">
                <div class="card">
                    <div class="card-body">
                        <h6>Basic Details</h6>
                        <hr>
                        <div class="row checkout-form">
                            <div class="col-md-6">
                                <label>Full Name</label>
                                <input type="text" class="form-control" placeholder="Full Name">
                            </div>
                            <div class="col-md-6">
                                <label>E-mail Address</label>
                                <input type="text" class="form-control" placeholder="E-mail Address">
                            </div>
                            <div class="col-md-12 mt-3">
                                <label>Address</label>
                                <input type="text" class="form-control" placeholder="Address">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>Phone Number</label>
                                <input type="text" class="form-control" placeholder="Phone Number">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>City</label>
                                <input type="text" class="form-control" placeholder="City">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>Country</label>
                                <input type="text" class="form-control" placeholder="Country">
                            </div>
                            <div class="col-md-6 mt-3">
                                <label>Postal Code</label>
                                <input type="text" class="form-control" placeholder="PostalCode">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="card">
                    <div class="card-body">
                        <h6>Order Details</h6>
                        <hr>
                        <table class="table table-striped table-bordered">
                            <tbody>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Qty</th>
                                        <th>Price</th>
                                    </tr>
                                </thead>
                                @foreach ($cartitems as $item)
                                    <tr>
                                        <td>{{ $item->products->name }}</td>
                                        <td>{{ $item->prod_qty }}</td>
                                        <td>{{ $item->products->selling_price }}</td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        <hr>
                        <button class="btn btn-primary float-end">Place Order</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
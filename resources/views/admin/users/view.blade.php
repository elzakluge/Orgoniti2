@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>User Details</h4>
        <a href="{{ url('users')}}" class="btn btn-primary btn-sm float-right">Back</a>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card-body"> 
                    <h4>User Details</h4>
                    <div class="row">
                        <div class="col-md-4 mt-3">
                            <label for="">Name</label>
                            <div class="p-2 border">{{ $users->name }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Email</label>
                            <div class="p-2 border">{{ $users->email }}</div>
                        </div>
                        <div class="col-md-4 mt-3">
                            <label for="">Role</label>
                            <div class="p-2 border">{{ $users->role_as == '0'? 'User':'Admin' }}</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>
</div>
@endsection
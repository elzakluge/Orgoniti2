

@extends('layouts.admin')

@section('content')
<div class="card">
    <div class="card-header">
        <h4>Registered Users</h4>
    </div>
    <div class="card-body">
        <table class="table">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Role</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $item)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name}}</td>
                        <td>{{ $item->email }}</td>
                        <td>{{ $item->role_as == '0'? 'User':'Admin' }}</td>
                        <td>
                            <a href="{{ url('view-user/'.$item->id)}}" class="btn btn-primary btn-sm">View</a>
                            <a href="{{ url('delete-user/'.$item->id)}}" class="btn btn-danger btn-sm">Delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
        
    </div>
</div>
@endsection
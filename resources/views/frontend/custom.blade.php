@extends('layouts.front')

@section('title')
        Create your own!
@endsection

@section('content')

<!------ Breadcrumbs ------>
<div class="py-3 mb-4 shadow-sm bg-warning border-top">
    <div class="container">
        <h6 class="mb-0">
            <a href="{{ url( '/') }}">Home</a> / 
            <a href="{{ url( 'create-custom/') }}"> Create your own!</a> 
        </h6>
    </div>
</div>

<!------ Input form ------>
<div class="py-1">


    <div class="container">
        <div class="row mb-3">
            <h4>Create your own!</h4>
        </div>

        <div class="row">
            <div class="col-md-6 py-1">
                <form action="{{ url('place-custom')}}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="mb-3">
                            <select class="form-select" name="category_id">
                                <option selected>Select a category</option>
                                @foreach ($category as $item)
                                    <option value="{{ $item ->id }}">{{ $item ->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="size">
                                <option selected>Select size</option>
                                @foreach ($size as $item)
                                    <option value="{{ $item ->id }}">{{ $item ->size }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="color">
                                <option selected>Select color</option>
                                @foreach ($color as $item)
                                    <option value="{{ $item ->id }}">{{ $item ->color }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="crystal">
                                <option selected>Select a crystal</option>
                                @foreach ($crystal as $item)
                                    <option value="{{ $item ->id }}">{{ $item ->crystal }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="mb-3">
                            <select class="form-select" name="glitter">
                                <option selected>Select glitter</option>
                                @foreach ($glitter as $item)
                                    <option value="{{ $item ->id }}">{{ $item ->glitter }}</option>
                                @endforeach
                            </select>
                        </div>
                        
                        <div class=" mb-3">
                            <label for="">Message:</label>
                            <textarea name="message" rows="3" class="form-control"></textarea>
                        </div>
                        
                        <div class="mb-3">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </form>
            </div>

            <!------ Instructions ------>
            <div class="col-md-6">
                <p>Here you can select materials for your own personalized orgonite or pyramid!</p>
            </div>
        </div>
        
    
</div>




@endsection
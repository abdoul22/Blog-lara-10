@extends('layouts.style')

@section('content')
<div class="container">
    <br>
    <div class="row align-items-start">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('products.index') }}">All Products</a>
        </div>
    </div>
    <br>
    @if ($errors->any())
    <div class="alert alert-danger" role="alert">
       <ul>
        @foreach ($errors->all() as $error )
            <li>{{ $error }}</li>
        @endforeach
       </ul>
    </div>
    @endif
    <form action="{{ route('products.store') }}" method="post" enctype="multipart/form-data">
    @csrf
    @method('POST')
    <div class="mb-3">
        <label for="name" class="form-label">Name</label>
        <input type="text" class="form-control" name='name' id="name" placeholder="Enter your name">
    </div>
    <div class="mb-3">
        <label for="details" class="form-label">Details</label>
        <textarea class="form-control" id="details" name='details' rows="3"></textarea>
    </div>
    <div class="mb-3">
        <label for="image" class="form-label">Image</label>
        <input type="file"name='image' class="form-control" id="image">
    </div>
    <button class="btn btn-info" type="submit">Submit</button>
    </form>
</div>
@endsection

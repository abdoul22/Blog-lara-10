@extends('layouts.style')

@section('content')
<div class="container" style="background-color: rgb(250, 242, 242) ">
    <br>
    <div class="row align-items-start">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('products.index') }}">All Products</a>
        </div>
    </div>
    <br>
        <div class="mb-3">
            <p>Name</p>
            <div>{{ $product->name }}</div>
        </div>
        <div class="mb-3" style="text-align: center; ">
            <img src="/images/{{ $product->image }}" alt="" height='500px' >
        </div>
        <div class="mb-3">
           <p>Details</p>
            <div>{{ $product->details }}</div>
        </div>
</div>
@endsection

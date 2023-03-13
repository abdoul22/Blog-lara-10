@extends('layouts.style')

@section('content')
<div class="container">
    <br>
    <div class="row align-items-start">
        <div class="col">
            <a class="btn btn-primary" href="{{ route('products.create') }}">Create</a>
        </div>
    </div>
    <br>
    @if ($message = Session::get('success'))
        <div class="alert alert-success" role="alert">
           {{ $message }}
        </div>
    @endif
    <table class="table">
        <thead class="table-light">
            <tr>
                <td>ID</td>
                <td>Image</td>
                <td>Name</td>
                <td>Details</td>
                <td>Action</td>
            </tr>
        </thead>
        <tbody>
            @foreach ($products as $product )
            <tr>
                <td>{{ $product->id }}</td>
                <td><img src="/images/{{ $product->image }}" alt="" height='200px' width="300px"></td>
                <td>{{ $product->name }}</td>
                <td>{{ $product->details }}</td>
                <td>
                    <form action="{{ route('products.destroy', $product->id) }}" method='post'>
                        @csrf
                        @method('DELETE')
                        <button type="submit" >Delete</button>
                    </form>
                    <a class="btn btn-info" href="{{ route('products.show', $product->id) }}">show</a>
                    <a class="btn btn-primary" href="{{ route('products.edit', $product->id) }}">edit</a>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
    <div style="display:flex; justify-content:space-around; align-item:center;">
    {{ $products->links() }}
    </div>
</div>

@endsection

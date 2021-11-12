@extends('master')
@section('content')
    <div class="container">
        <a href="{{ route('product.create') }}" type="button" class="btn btn-success">Add new Product</a>
        <table class="table table-hover">
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Quantity</th>
                <th scope="col">Price</th>
                <th scope="col">Image</th>
                <th scope="col">Create_At</th>
                <th scope="col">Update_At</th>
                <th scope="col">Category</th>
            </tr>
            @forelse($products as $key => $product)
                <tr>
                    <th scope="col">{{ $key+1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ asset('storage/'.$product->image) }}" alt="" width="100px"></td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>{{ $product->category->name ?? 'chua phan loai'}}</td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection

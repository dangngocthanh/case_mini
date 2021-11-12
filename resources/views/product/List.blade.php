@extends('master')
@section('content')
    <div class="container">
        <a href="{{ route('product.create') }}" type="button" class="btn btn-success">Add new Product</a>
        <a href="{{ route('product.delete') }}" type="button" id="delete" class="btn btn-success">Delete Product</a>
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
                    <input type="checkbox" class="checkbox">
                    <th scope="col">{{ $key+1 }}</th>
                    <td>{{ $product->name }}</td>
                    <td>{{ $product->quantity }}</td>
                    <td>{{ $product->price }}</td>
                    <td><img src="{{ asset('storage/'.$product->image) }}" alt="" width="100px" height="100px"></td>
                    <td>{{ $product->created_at }}</td>
                    <td>{{ $product->updated_at }}</td>
                    <td>{{ $product->category->name ?? 'chua phan loai'}}</td>
                    <td><a href="{{ route('product.edit',$product->id) }}" type="button" class="btn btn-warning">Chỉnh sửa</a></td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection

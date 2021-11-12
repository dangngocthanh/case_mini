@extends('master')
@section('content')
    <div class="card container">
        <div class="card-header" style="font-size: 30px">
            Edit Product
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' value="{{ $product->name }}"
                           name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' value="{{ $product->price }}"
                           name="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' value="{{ $product->quantity }}"
                           name="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" id='exampleInputEmail1' value="{{ $product->image }}"
                           name="image">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select class="custom-select" name="category_id">
                        @foreach($categories as $category)
                            @if($category->id == $product->id)
                                <option selected value="{{ $category->id }}">{{ $category->name }}</option>
                            @else
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endif
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">update</button>
                <a href="{{ route('product.list') }}" type="button" class="btn btn-success">Back</a>

            </form>
        </div>
    </div>
@endsection

@extends('master')
@section('content')
    <div class="card container">
        <div class="card-header" style="font-size: 30px">
            Add new Product
        </div>
        <div class="card-body">
            <form action="{{ route('product.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="name">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Price</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="price">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Quantity</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="quantity">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Phone</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="phone">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Image</label>
                    <input type="file" class="form-control" id='exampleInputEmail1' name="image">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1">Category</label>
                    <select class="custom-select" name="category_id">
                        @foreach($categories as $category)
                            <option value="{{ $category->id }}" >{{ $category->name }}</option>
                        @endforeach
                    </select>
                </div>
                <button type="submit" class="btn btn-primary">Add</button>
                <a href="/" type="button" class="btn btn-success">Back</a>

            </form>
        </div>
    </div>
@endsection

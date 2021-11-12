@extends('master')
@section('content')
    <div class="card container">
        <div class="card-header" style="font-size: 30px">
            Add new Category
        </div>
        <div class="card-body">
            <form action="{{ route('categories.store') }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="exampleInputEmail1">Name</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="name">
                </div>
                <button type="submit" class="btn btn-primary">SignIn</button>
                <a href="/" type="button" class="btn btn-success">Back</a>

            </form>
        </div>
    </div>
@endsection

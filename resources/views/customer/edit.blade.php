@extends('master')
@section('content')
    <div class="card">
        <div class="card-header" style="font-size: 30px">
            Sign In
        </div>
        <div class="card-body">
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Account</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="account" value="{{ $product->account }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input type="password" class="form-control" name="password" id="exampleInputPassword1" value="{{ $product->password }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Name</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="name" value="{{ $product->name }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Gender</label>
                    <select class="custom-select" name="gender">
                        <option selected value="{{ $product->gender }}">{{ $product->gender }}</option>
                        <option value="female">Female</option>
                        <option value="male">Male</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Date of Birth</label>
                    <input type="date" class="form-control" id='exampleInputEmail1' name="dob" value="{{ $product->dob }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Email</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="email" value="{{ $product->email }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Phone</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="phone" value="{{ $product->phone }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Address</label>
                    <input type="text" class="form-control" id='exampleInputEmail1' name="address" value="{{ $product->address }}">
                </div>
                <div class="form-group">
                    <label for="exampleInputEmail1" >Image</label>
                    <input type="file" class="form-control" id='exampleInputEmail1' name="image" value="{{ $product->image }}">
                </div>
                <a href="{{ route('user.store') }}" type="button" class="btn btn-primary">SignIn</a>
                <a href="/" type="button" class="btn btn-success">Back</a>

            </form>
        </div>
    </div>
@endsection

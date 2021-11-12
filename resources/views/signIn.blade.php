<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css"
          integrity="sha384-zCbKRCUGaJDkqS1kPbPd7TveP5iyJE0EjAuZQTgFLD2ylzuqKfdKlfG/eSrtxUkn" crossorigin="anonymous">
    <title>Hello, world!</title>
</head>
<body class="container">
<!-- Optional JavaScript; choose one of the two! -->
<div class="card">
    <div class="card-header" style="font-size: 30px">
        Sign In
    </div>
    <div class="card-body">
        <form action="{{ route('user.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <div class="form-group">
                <label for="exampleInputEmail1" >Account</label>
                <input type="text" class="form-control" id='exampleInputEmail1' name="account">
            </div>
            <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" class="form-control" name="password" id="exampleInputPassword1">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Name</label>
                <input type="text" class="form-control" id='exampleInputEmail1' name="name">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Gender</label>
                <select class="custom-select" name="gender">
                    <option selected value="male">Male</option>
                    <option value="female">Female</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Date of Birth</label>
                <input type="date" class="form-control" id='exampleInputEmail1' name="dob">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Email</label>
                <input type="text" class="form-control" id='exampleInputEmail1' name="email">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Phone</label>
                <input type="text" class="form-control" id='exampleInputEmail1' name="phone">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Address</label>
                <input type="text" class="form-control" id='exampleInputEmail1' name="address">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail1" >Image</label>
                <input type="file" class="form-control" id='exampleInputEmail1' name="image">
            </div>
            @if(session('hasLogin'))
            <div class="form-group">
                <label for="exampleInputEmail1" >Role</label>
                <input type="text" class="form-control" id='exampleInputEmail1' name="role">
            </div>
            @else
                <input type="hidden" name="role" value="2">
            @endif
            <button type="submit" class="btn btn-primary">SignIn</button>
            <a href="/" type="button" class="btn btn-success">Back</a>

        </form>
    </div>
</div>
<!-- Option 1: Bootstrap Bundle with Popper -->

<script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
        integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
        crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"
        integrity="sha384-VHvPCCyXqtD5DqJeNxl2dtTyhF78xXNXdkwX1CZeRusQfRKp+tA7hAShOK/B/fQ2"
        crossorigin="anonymous"></script>

<!-- Option 2: Separate Popper and Bootstrap JS -->
<!--
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>
-->
</body>
</html>

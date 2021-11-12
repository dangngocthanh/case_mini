@extends('master')
@section('content')
    <div class="container">
        <a href="{{ route('categories.create') }}" type="button" class="btn btn-success">Add new Product</a>
        <table class="table table-hover">
            <tr>
                <th scope="col">Category id</th>
                <th scope="col">Name</th>
                <th scope="col">Create_At</th>
                <th scope="col">Update_At</th>
            </tr>
            @forelse($categories as $category)
                <tr>
                   <td scope="col"> {{ $category->id }} </td>
                   <td scope="col"> {{ $category->name }} </td>
                   <td scope="col"> {{ $category->created_at }} </td>
                   <td scope="col"> {{ $category->updated_at }} </td>
                </tr>
            @empty
            @endforelse
        </table>
    </div>
@endsection

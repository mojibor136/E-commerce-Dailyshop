@extends('admin.layout.tempalate')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Category</h5>
            @if (session()->has('massage'))
                <div class="alert alert-success">
                    <li>{{ session()->get('massage') }}</li>
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox" name="" id=""></th>
                            <th>Id</th>
                            <th>Category Name</th>
                            <th>Sub Category</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->subcategory_count }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <a href="{{ route('editcategory', $category->id) }}" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('deletecategory', $category->id) }}"
                                        class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

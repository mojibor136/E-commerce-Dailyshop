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
                            <th>Id</th>
                            <th>Category Img</th>
                            <th>Category Name</th>
                            <th>Sub Category</th>
                            <th>product</th>
                            <th>Slug</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $category->id }}</td>
                                <td><img src="{{ asset('assets/image/CategoryImg/' . $category->category_img) }}"
                                        alt="" width="40" height="40"></td>
                                <td>{{ $category->category_name }}</td>
                                <td>{{ $category->subcategory_count }}</td>
                                <td>{{ $category->product_count }}</td>
                                <td>{{ $category->slug }}</td>
                                <td>
                                    <div class="button">
                                        <form action="{{ route('editcategory', $category->id) }}" method="get">
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="{{ route('deletecategory', $category->id) }}" method="get">
                                            <button class="btn btn-warning">Delete</button>
                                        </form>
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

@extends('admin.layout.tempalate')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">All SubCategory</h5>
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
                            <th>SubCategory Name</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th></th>
                            <th></th>
                            <th> </th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($subcategory as $subcategory)
                            <tr>
                                <td>{{ $subcategory->id }}</td>
                                <td>{{ $subcategory->subcategory_name }}</td>
                                <td>{{ $subcategory->category_name }}</td>
                                <td>{{ $subcategory->product_count }}</td>
                                <td></td>
                                <td></td>
                                <td></td>
                                <td>
                                    <div class="button">
                                        <form action="{{ route('editsubcategory', $subcategory->id) }}" method="get">
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="{{ route('deletesubcategory', $subcategory->id) }}" method="get">
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

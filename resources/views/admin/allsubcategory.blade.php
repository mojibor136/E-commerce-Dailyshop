@extends('admin.layout.tempalate')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">All SubCategory</h5>
            @if (session()->has('massage'))
                <div class="alert alert-success">
                    <li>{{session()->get('massage')}}</li>
                </div>
            @endif
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Id</th>
                            <th>SubCategory Name</th>
                            <th>Category</th>
                            <th>Product</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($subcategory as $subcategory)
                        <tr>
                            <td><input type="checkbox"></td>
                            <td>{{$subcategory->id}}</td>
                            <td>{{$subcategory->subcategory_name}}</td>
                            <td>{{$subcategory->category_name}}</td>
                            <td>{{$subcategory->product_count}}</td>
                            <td>
                                <a href="{{route('editsubcategory' , $subcategory->id)}}" class="btn btn-primary">Edit</a>
                                <a href="{{route('deletesubcategory' , $subcategory->id)}}" class="btn btn-warning">Delete</a>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

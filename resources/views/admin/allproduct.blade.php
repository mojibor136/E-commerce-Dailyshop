@extends('admin.layout.tempalate')
@section('content')
    <style>
        main .container {
            padding: 0;
        }

        main .container .card .table-responsive table {
            font-size: 15px;
        }

        main .container .card .table-responsive table tbody tr td .btn {
            padding: 5px 7px;
        }
    </style>
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Product</h5>
            <div class="table-responsive sm text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>Id</th>
                            <th>Img</th>
                            <th>Product Name</th>
                            <th>Price</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        @foreach ($products as $product)
                            <tr>
                                <td><input type="checkbox"></td>
                                <td>{{ $product->id }}</td>
                                <td>
                                    <img src="{{ asset('upload/1783679396005652.jpg') }}" alt="Product Image" width="50">
                                </td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td><a href="" class="btn btn-success">Active</a></td>
                                <td>
                                    <a href="" class="btn btn-primary">Edit</a>
                                    <a href="{{ route('delete', $product->id) }}" class="btn btn-warning">Delete</a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

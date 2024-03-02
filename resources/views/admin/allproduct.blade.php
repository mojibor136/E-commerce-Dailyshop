@extends('admin.layout.tempalate')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Product</h5>
            @if (session()->has('massage'))
                <div class="alert alert-success">
                    <li>{{ session()->get('massage') }}</li>
                </div>
            @endif
            <div class="table-responsive sm text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
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
                                <td>{{ $product->id }}</td>
                                <td>
                                    <img src="{{ asset('assets/image/ProductImg/' . $product->product_img) }}"
                                        alt="Product Image" width="50">
                                </td>
                                <td>{{ $product->product_name }}</td>
                                <td>{{ $product->product_price }}</td>
                                <td><a href="" class="btn btn-success">Active</a></td>
                                <td>
                                    <div class="button">
                                        <form action="{{ route('edit.product', $product->id) }}" method="get">
                                            <button class="btn btn-primary">Edit</button>
                                        </form>
                                        <form action="{{ route('delete.product', $product->id) }}" method="get">
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

@extends('admin.layout.tempalate')
@section('content')
    <div class="container">
        <div class="card">
            <h5 class="card-header">All Order</h5>
            <div class="table-responsive text-nowrap">
                <table class="table">
                    <thead class="table-light">
                        <tr>
                            <th><input type="checkbox"></th>
                            <th>order id</th>
                            <th>customer name</th>
                            <th>order date</th>
                            <th>order status</th>
                            <th>total price</th>
                            <th>payment status</th>
                        </tr>
                    </thead>
                    <tbody class="table-border-bottom-0">
                        <tr>
                            <td><input type="checkbox" name="" id=""></td>
                            <td>#1</td>
                            <td>Mojibor</td>
                            <td>12-01-2023</td>
                            <td>panding</td>
                            <td>$520</td>
                            <td>Not Paid</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

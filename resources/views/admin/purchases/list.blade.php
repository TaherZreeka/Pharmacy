@extends('admin.layouts.app')
@section('admin_title')
Purchases
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Purchase List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{url('admin/purchases/add')}}" class="btn btn-primary">Add New Purchase</a>
                    </h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Invoice</th>
                                <th scope="col">Voucher Number</th>
                                <th scope="col">Purchase Date</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Payment_Status</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($purchases as $purchase)
                            <tr>
                                <th scope="row">{{ $purchase['id'] }}</th>
                                <td>{{ $purchase->supplier->name }}</td>
                                <td>{{ optional($purchase->invoice)->invoice_number ?? 'No Invoice' }}</td>
                                <td>{{ $purchase['voucher_number'] }}</td>
                                <td>{{ $purchase['purchase_date'] }}</td>
                                <td>{{ $purchase['total_amount'] }}</td>
                                <td>{{ $purchase['payment_status'] }}</td>
                                <td>{{date('d-m-Y',strtotime($purchase['created_at'])) }}</td>
                                <td style="display: flex">
                                    <!-- Edit Button -->
                                    <a href="{{ url('/admin/purchases/edit/' . $purchase['id']) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ url('/admin/purchases/' . $purchase->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin-left: 5px;"
                                            onclick="return confirm('Are you sure you want to delete this customer?');">
                                            <i class="bi bi-trash"></i>
                                        </button>
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection

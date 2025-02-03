@extends('admin.layouts.app')
@section('admin_title')
Invoices
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Invoices List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{url('admin/invoices/create')}}" class="btn btn-primary">Add New Invoices</a>
                    </h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">Invoice_no</th>
                                <th scope="col">Customer</th>
                                <th scope="col">Date</th>
                                <th scope="col">Total Amount</th>
                                <th scope="col">Total Discount</th>
                                <th scope="col">Net Total</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($invoices as $invoice)
                            <tr>
                                <th scope="row">{{ $invoice['invoice_no'] }}</th>
                                <td>{{ $invoice->customer->name }}</td>
                                <td>{{ $invoice['date'] }}</td>
                                <td>{{ $invoice['total_amount'] }}</td>
                                <td>{{ $invoice['total_discount'] }}</td>
                                <td>{{ $invoice['net_total'] }}</td>
                                <td>{{date('d-m-Y',strtotime($invoice['created_at'])) }}</td>
                                <td style="display: flex">
                                    <!-- Edit Button -->
                                    <a href="{{ url('/admin/invoices/edit/' . $invoice['id']) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ url('/admin/invoices/' . $invoice->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin-left: 5px;"
                                            onclick="return confirm('Are you sure you want to delete this Invoice?');">
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
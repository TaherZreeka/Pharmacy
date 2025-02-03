@extends('admin.layouts.app')
@section('admin_title')
Customers
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Customer List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{url('admin/customers/add')}}" class="btn btn-primary">Add New Customer</a>
                    </h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Name</th>
                                <th scope="col">Contact Number</th>
                                <th scope="col">Address</th>
                                <th scope="col">Doctor Name</th>
                                <th scope="col">Doctor Address</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($customers as $customer)
                            <tr>
                                <th scope="row">{{ $customer['id'] }}</th>
                                <th scope="row">{{ $customer['name'] }}</th>
                                <td>{{ $customer['contact_number'] }}</td>
                                <td>{{ $customer['address'] }}</td>
                                <td>{{ $customer['doctor_name'] }}</td>
                                <td>{{ $customer['doctor_address'] }}</td>
                                <td>{{date('d-m-Y',strtotime($customer['created_at'])) }}</td>
                                <td style="display: flex">
                                    <!-- Edit Button -->
                                    <a href="{{ url('/admin/customers/edit/' . $customer['id']) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ url('/admin/customers/' . $customer->id) }}" method="POST"
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
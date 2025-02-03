@extends('admin.layouts.app')
@section('admin_title')
Medicines Stock
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Medicine Stock List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{url('admin/medicines_stock/add')}}" class="btn btn-primary">Add New Medicine
                            Stock</a>
                    </h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Medicines Name</th>
                                <th scope="col">Batch Id</th>
                                <th scope="col">Ex Date</th>
                                <th scope="col">Qty</th>
                                <th scope="col">M_R_P</th>
                                <th scope="col">Rate</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicines_stock as $medicine_stock)
                            <tr>
                                <th scope="row">{{ $medicine_stock['id'] }}</th>
                                <th scope="row">{{ $medicine_stock['Medicines_Name'] }}</th>
                                <td>{{ $medicine_stock['Batch_Id'] }}</td>
                                <td>{{ $medicine_stock['Ex_Date'] }}</td>
                                <td>{{ $medicine_stock['Qty'] }}</td>
                                <td>{{ $medicine_stock['M_R_P'] }}</td>
                                <td>{{ $medicine_stock['Rate'] }}</td>
                                <td>{{date('d-m-Y',strtotime($medicine_stock['created_at'])) }}</td>
                                <td style="display: flex">
                                    <!-- Edit Button -->
                                    <a href="{{ url('/admin/medicines_stock/edit/' . $medicine_stock['id']) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ url('/admin/medicines_stock/' . $medicine_stock->id) }}"
                                        method="POST" style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin-left: 5px;"
                                            onclick="return confirm('Are you sure you want to delete this Medicines Stock?');">
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
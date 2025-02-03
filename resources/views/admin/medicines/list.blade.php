@extends('admin.layouts.app')
@section('admin_title')
Medicines
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Medicine List</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            @include('message')
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">
                        <a href="{{url('admin/medicines/add')}}" class="btn btn-primary">Add New Medicine</a>
                    </h5>

                    <table class="table datatable">
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Medicines Name</th>
                                <th scope="col">Packing</th>
                                <th scope="col">Generic Name</th>
                                <th scope="col">Supplier</th>
                                <th scope="col">Created At</th>
                                <th scope="col">Active</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($medicines as $medicine)
                            <tr>
                                <th scope="row">{{ $medicine['id'] }}</th>
                                <th scope="row">{{ $medicine['Medicines_Name'] }}</th>
                                <td>{{ $medicine['Packing'] }}</td>
                                <td>{{ $medicine['Generic_Name'] }}</td>
                                <td>{{ $medicine->supplier->name }}</td>
                                <td>{{date('d-m-Y',strtotime($medicine['created_at'])) }}</td>
                                <td style="display: flex">
                                    <!-- Edit Button -->
                                    <a href="{{ url('/admin/medicines/edit/' . $medicine['id']) }}"
                                        class="btn btn-success">
                                        <i class="bi bi-pencil-square"></i>
                                    </a>

                                    <!-- Delete Button -->
                                    <form action="{{ url('/admin/medicines/' . $medicine->id) }}" method="POST"
                                        style="display: inline;">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger" style="margin-left: 5px;"
                                            onclick="return confirm('Are you sure you want to delete this Medicines?');">
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
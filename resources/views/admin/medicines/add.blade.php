@extends('admin.layouts.app')
@section('admin_title')
Add Medicines
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Add Medicine</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Medicines</h5>
                    <form action="{{url('/admin/medicines/add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Medicines Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Medicines_Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Packing:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Packing" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Generic Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="Generic_Name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <label class="col-sm-2 col-form-label">Supplier:</label>
                            <div class="col-sm-10">
                                <select name="supplier_id" class="form-control" required>
                                    <option value="">Select Supplier</option>
                                    @foreach($suppliers as $supplier)
                                    <option value="{{ $supplier->id }}">{{ $supplier->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Add
                                Medicine</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
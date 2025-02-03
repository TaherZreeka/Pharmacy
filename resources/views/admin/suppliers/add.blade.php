@extends('admin.layouts.app')
@section('admin_title')
Add Suppliers
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Add Supplier</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Customer</h5>
                    <form action="{{url('/admin/suppliers/add')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="name" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Email:</lable>
                            <div class="col-sm-10">
                                <input type="email" name="email" class="form-control" required>
                            </div>
                        </div>
                        <div class="row mb-3">
                            <lable class="col-sm-2 col-form-label">Contact Number:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="contact_number" class="form-control" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Add
                                Supplier</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
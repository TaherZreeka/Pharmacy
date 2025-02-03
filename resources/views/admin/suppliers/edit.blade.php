@extends('admin.layouts.app')
@section('admin_title')
Edit Suppliers
@endsection
@section('admin_content')
<div class="pagetitle">
    <h1>Edit Supplier</h1>
</div>

<section class="section">
    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h5 class="card-title">Supplier</h5>
                    <form action="{{url('/admin/suppliers/edit/'.$edit_supplier->id)}}" method="post"
                        enctype="multipart/form-data">
                        @csrf
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Name:</lable>
                            <div class="col-sm-10">
                                <input type="text" name="name" value=" {{$edit_supplier->name}}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Email:</lable>
                            <div class="col-sm-10">
                                <input type="email" name="email" value=" {{$edit_supplier->email}}" class="form-control"
                                    required>
                            </div>
                        </div>
                        <div class="row mb-3 ">
                            <lable class="col-sm-2 col-form-label">Contact Number:</lable>
                            <div class="col-sm-10">
                                <input type="number" name="contact_number" value=" {{$edit_supplier->contact_number}}"
                                    class="form-control" required>
                            </div>
                        </div>

                        <div class="text-center">
                            <button class="btn btn-primary  w-80" style="width: 50%" value="submit">Edit
                                Suppliers</button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection